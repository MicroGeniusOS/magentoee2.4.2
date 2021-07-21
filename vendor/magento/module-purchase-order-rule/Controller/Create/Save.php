<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\PurchaseOrderRule\Controller\Create;

use Magento\Company\Api\RoleManagementInterface;
use Magento\Company\Api\RoleRepositoryInterface;
use Magento\Company\Model\CompanyContext;
use Magento\Company\Model\CompanyUser;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Context as ActionContext;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Phrase;
use Magento\PurchaseOrder\Controller\AbstractController;
use Magento\PurchaseOrder\Model\Config as PurchaseOrderConfig;
use Magento\PurchaseOrder\Model\Customer\Authorization;
use Magento\PurchaseOrderRule\Api\Data\RuleInterface;
use Magento\PurchaseOrderRule\Api\RuleRepositoryInterface;
use Magento\PurchaseOrderRule\Model\Rule\Condition\Combine;
use Magento\PurchaseOrderRule\Model\Rule\ConditionBuilderFactory;
use Magento\PurchaseOrderRule\Model\RuleConditionPool;
use Magento\PurchaseOrderRule\Model\RuleFactory;
use Psr\Log\LoggerInterface;

/**
 * Controller class for purchase order rule form.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Save extends AbstractController implements HttpPostActionInterface
{
    /**
     * Required resource for action authorization.
     */
    const COMPANY_RESOURCE = 'Magento_PurchaseOrderRule::manage_approval_rules';

    /**
     * @var PurchaseOrderConfig
     */
    private $purchaseOrderConfig;

    /**
     * @var RoleRepositoryInterface
     */
    private $roleRepository;

    /**
     * @var CompanyUser
     */
    private $companyUser;

    /**
     * @var RuleConditionPool
     */
    private $ruleConditionPool;

    /**
     * @var RuleFactory
     */
    private $ruleFactory;

    /**
     * @var RuleRepositoryInterface
     */
    private $ruleRepository;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ConditionBuilderFactory
     */
    private $conditionBuilderFactory;

    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var RoleManagementInterface
     */
    private $roleManagement;

    /**
     * @param ActionContext $context
     * @param CompanyContext $companyContext
     * @param Authorization $authorization
     * @param PurchaseOrderConfig $purchaseOrderConfig
     * @param RoleRepositoryInterface $roleRepository
     * @param CompanyUser $companyUser
     * @param RuleConditionPool $ruleConditionPool
     * @param RuleFactory $ruleFactory
     * @param RuleRepositoryInterface $ruleRepository
     * @param LoggerInterface $logger
     * @param ConditionBuilderFactory $conditionBuilderFactory
     * @param Session $customerSession
     * @param RoleManagementInterface $roleManagement
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        ActionContext $context,
        CompanyContext $companyContext,
        Authorization $authorization,
        PurchaseOrderConfig $purchaseOrderConfig,
        RoleRepositoryInterface $roleRepository,
        CompanyUser $companyUser,
        RuleConditionPool $ruleConditionPool,
        RuleFactory $ruleFactory,
        RuleRepositoryInterface $ruleRepository,
        LoggerInterface $logger,
        ConditionBuilderFactory $conditionBuilderFactory,
        Session $customerSession,
        RoleManagementInterface $roleManagement
    ) {
        parent::__construct($context, $companyContext, $authorization);
        $this->purchaseOrderConfig = $purchaseOrderConfig;
        $this->roleRepository = $roleRepository;
        $this->companyUser = $companyUser;
        $this->ruleConditionPool = $ruleConditionPool;
        $this->ruleFactory = $ruleFactory;
        $this->ruleRepository = $ruleRepository;
        $this->logger = $logger;
        $this->conditionBuilderFactory = $conditionBuilderFactory;
        $this->customerSession = $customerSession;
        $this->roleManagement = $roleManagement;
    }

    /**
     * Consume data from form and create new Purchase Order rule in database
     *
     * @return Redirect
     * @throws LocalizedException
     */
    public function execute()
    {
        $request = $this->getRequest();
        $resultRedirect = $this->resultRedirectFactory->create();

        $this->customerSession->setPurchaseOrderRuleFormData($this->getRequest()->getPostValue());
        try {
            $this->validate($request);
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            return $resultRedirect->setRefererUrl();
        }
        $ruleId = $request->getParam('rule_id');
        if (isset($ruleId)) {
            $rule = $this->ruleRepository->get((int) $ruleId);
            $successMessage = __('The approval rule has been updated.');
        } else {
            $rule = $this->ruleFactory->create();
            $rule->setCreatedBy((int) $this->customerSession->getCustomerId());
            $successMessage = __('The approval rule has been created.');
        }
        $rule->setName($request->getParam(RuleInterface::KEY_NAME));
        $rule->setDescription($request->getParam(RuleInterface::KEY_DESCRIPTION) ?? '');
        $this->setRuleApprovers($rule, $request->getParam('approvers'));
        if ($request->getParam('applies_to_all') === '1') {
            $rule->setAppliesToAll(true);
        } else {
            $rule->setAppliesToAll(false);
            $rule->setAppliesToRoleIds($request->getParam('applies_to'));
        }
        $rule->setIsActive($request->getParam(RuleInterface::KEY_IS_ACTIVE) === "1");
        $rule->setConditionsSerialized($this->buildSerializedCondition($request->getParam('conditions')));
        $rule->setCompanyId((int) $this->companyUser->getCurrentCompanyId());

        try {
            $this->ruleRepository->save($rule);
            $this->messageManager->addSuccessMessage($successMessage);
            $this->customerSession->setPurchaseOrderRuleFormData([]);
            return $resultRedirect->setPath('purchaseorderrule');
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            return $resultRedirect->setRefererUrl();
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $this->messageManager->addErrorMessage(__('An unknown error occurred while creating the rule.'));
            return $resultRedirect->setRefererUrl();
        }
    }

    /**
     * Set the approver role IDs required for the rule and whether admin or manager approval is required.
     *
     * @param RuleInterface $rule
     * @param array $roleIds
     */
    private function setRuleApprovers(RuleInterface $rule, array $roleIds)
    {
        $adminIndex = array_search($this->roleManagement->getCompanyAdminRoleId(), $roleIds);
        if (false !== $adminIndex) {
            $rule->setAdminApprovalRequired(true);
            unset($roleIds[$adminIndex]);
        } else {
            $rule->setAdminApprovalRequired(false);
        }
        $managerIndex = array_search($this->roleManagement->getCompanyManagerRoleId(), $roleIds);
        if (false !== $managerIndex) {
            $rule->setManagerApprovalRequired(true);
            unset($roleIds[$managerIndex]);
        } else {
            $rule->setManagerApprovalRequired(false);
        }
        $rule->setApproverRoleIds($roleIds);
    }

    /**
     * Validate the incoming request is valid for a Purchase Order rule
     *
     * @param RequestInterface $request
     * @throws LocalizedException
     */
    private function validate(RequestInterface $request)
    {
        // Verify that name is present
        $ruleName = $request->getParam(RuleInterface::KEY_NAME);
        if (!$ruleName || trim($ruleName) === "") {
            throw new LocalizedException(__('Required field is not complete.'));
        }

        // Verify the conditions are present in the request and are an array with at least one entry
        if (!$this->validateParamArray($request->getParam('conditions'))) {
            throw new LocalizedException(__('Rule conditions have not been configured.'));
        }

        $this->validateConditions($request->getParam('conditions'));

        // Verify at least one approver is set
        if (!$this->validateParamArray($request->getParam('approvers'))) {
            throw new LocalizedException(__('At least one approver is required to configure this rule.'));
        }

        // Verify the rule is applied to all, or at least one approver is selected
        if ($request->getParam('applies_to_all') === '0'
            && !$this->validateParamArray($request->getParam('applies_to'))
        ) {
            throw new LocalizedException(__('This rule must apply to at least one or all roles.'));
        }

        // Validate roles for both the applies to & approvers
        if ($request->getParam('applies_to')) {
            $this->validateRoles(
                $request->getParam('applies_to'),
                __('One of the "Applies To" roles does not exist.')
            );
        }

        $ruleId = $request->getParam(RuleInterface::KEY_ID);
        $companyId = (int)$this->companyUser->getCurrentCompanyId();

        if (!$this->ruleRepository->isCompanyRuleNameUnique($ruleName, $companyId, $ruleId)) {
            throw new LocalizedException(__('This rule name already exists. Enter a unique rule name.'));
        }

        $this->validateRoles(
            $request->getParam('approvers'),
            __('The approver role which was selected does not exist.')
        );

        // Verify rule is exists and allowed to modify
        $this->validateExistingRule((int) $request->getParam('rule_id'));
    }

    /**
     * Validate the request conditions
     *
     * @param array $conditions
     *
     * @throws LocalizedException
     */
    private function validateConditions(array $conditions)
    {
        // Iterate through conditions and ensure all required data is present
        foreach ($conditions as $condition) {
            if (!isset($condition['attribute']) || !isset($condition['operator']) || !isset($condition['value'])) {
                throw new LocalizedException(__('Required data is missing from a rule condition.'));
            }

            // Hand validation of rule condition to validator class as configured in DI for pool
            $this->ruleConditionPool->validateRuleCondition(
                $condition['attribute'],
                $condition['operator'],
                $condition['value']
            );
        }
    }

    /**
     * Validate that all role selections are valid
     *
     * @param array $approvers
     * @param Phrase $errorMessage
     *
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    private function validateRoles(array $approvers, Phrase $errorMessage)
    {
        // Verify all approvers exist and are assigned to the users company
        foreach ($approvers as $approver) {
            if ($approver == $this->roleManagement->getCompanyAdminRoleId() ||
                $approver == $this->roleManagement->getCompanyManagerRoleId()) {
                continue;
            }

            try {
                $companyRole = $this->roleRepository->get($approver);
            } catch (NoSuchEntityException $e) {
                throw new LocalizedException($errorMessage);
            }

            // If the role is not part of the users current company we throw a generic does not exist error
            if (!$companyRole || $this->companyUser->getCurrentCompanyId() !== $companyRole->getCompanyId()) {
                throw new LocalizedException($errorMessage);
            }
        }
    }

    /**
     * Validate a request param of type array
     *
     * @param array $array
     * @return bool
     */
    private function validateParamArray($array)
    {
        return is_array($array) && count($array) > 0;
    }

    /**
     * Build up conditions for the rule based on the users input
     *
     * @param array $conditions
     * @return string
     */
    private function buildSerializedCondition(array $conditions)
    {
        $combineCondition = $this->conditionBuilderFactory->create()
            ->setType(Combine::class)
            ->setAttribute(null)
            ->setOperator(null)
            ->setValue('1')
            ->setIsValueProcessed(null)
            ->setAggregator('all');

        // For each condition in the request add a condition into the serialized string
        foreach ($conditions as $condition) {
            $conditionRule = $this->ruleConditionPool->getType($condition['attribute']);
            if ($conditionRule) {
                $combineCondition->addCondition(
                    $this->conditionBuilderFactory->create()
                        ->setType(get_class($conditionRule))
                        ->setAttribute((string) $condition['attribute'])
                        ->setOperator((string) $condition['operator'])
                        ->setValue((string) $condition['value'])
                        ->setCurrencyCode(isset($condition['currency_code']) ?
                            (string) $condition['currency_code'] : '')
                        ->setIsValueProcessed(false)
                        ->create()
                );
            }
        }

        return $combineCondition->create()->toString();
    }

    /**
     * Validate save changes to the existing rule
     *
     * @param int $ruleId
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    private function validateExistingRule(int $ruleId)
    {
        if (!$ruleId) {
            return;
        }

        $rule = $this->ruleRepository->get($ruleId);
        if (!$rule || ($rule && (int) $rule->getCompanyId() !== (int) $this->companyUser->getCurrentCompanyId())) {
            throw new LocalizedException(__('The selected rule does not exist.'));
        }
    }

    /**
     * Check if this action is allowed.
     *
     * Verify that the user belongs to a company with purchase orders enabled.
     * Verify that the user has the required permission to perform the action.
     *
     * @return bool
     */
    protected function isAllowed()
    {
        return $this->purchaseOrderConfig->isEnabledForCurrentCustomerAndWebsite()
            && $this->companyContext->isResourceAllowed(self::COMPANY_RESOURCE);
    }
}
