<?php
namespace Magento\PurchaseOrderRule\Controller\Create\Save;

/**
 * Interceptor class for @see \Magento\PurchaseOrderRule\Controller\Create\Save
 */
class Interceptor extends \Magento\PurchaseOrderRule\Controller\Create\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Magento\PurchaseOrder\Model\Customer\Authorization $authorization, \Magento\PurchaseOrder\Model\Config $purchaseOrderConfig, \Magento\Company\Api\RoleRepositoryInterface $roleRepository, \Magento\Company\Model\CompanyUser $companyUser, \Magento\PurchaseOrderRule\Model\RuleConditionPool $ruleConditionPool, \Magento\PurchaseOrderRule\Model\RuleFactory $ruleFactory, \Magento\PurchaseOrderRule\Api\RuleRepositoryInterface $ruleRepository, \Psr\Log\LoggerInterface $logger, \Magento\PurchaseOrderRule\Model\Rule\ConditionBuilderFactory $conditionBuilderFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Company\Api\RoleManagementInterface $roleManagement)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $authorization, $purchaseOrderConfig, $roleRepository, $companyUser, $ruleConditionPool, $ruleFactory, $ruleRepository, $logger, $conditionBuilderFactory, $customerSession, $roleManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
