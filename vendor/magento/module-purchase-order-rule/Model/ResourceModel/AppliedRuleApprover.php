<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PurchaseOrderRule\Model\ResourceModel;

use Magento\Company\Model\Company\Structure as CompanyStructure;
use Magento\Company\Model\CompanyAdminPermission;
use Magento\Company\Model\CompanyContext;
use Magento\Company\Model\CompanyUser;
use Magento\Company\Model\UserRoleManagement;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface;
use Magento\PurchaseOrderRule\Api\Data\AppliedRuleApproverInterface;
use Magento\PurchaseOrderRule\Api\Data\AppliedRuleInterface;
use Magento\PurchaseOrderRule\Model\ResourceModel\PurchaseOrder\Grid\CollectionFactory;

/**
 * Applied rule approver resource model
 */
class AppliedRuleApprover extends AbstractDb
{
    /**
     * @var CompanyStructure
     */
    private $companyStructure;

    /**
     * @var CompanyContext
     */
    private $companyContext;

    /**
     * @var CompanyUser
     */
    private $companyUser;

    /**
     * @var UserRoleManagement
     */
    private $userRoleManagement;

    /**
     * @var CollectionFactory
     */
    private $purchaseOrdersCollectionFactory;

    /**
     * @var CompanyAdminPermission
     */
    private $companyAdminPermission;

    /**
     * @param Context $context
     * @param CompanyStructure $companyStructure
     * @param CompanyContext $companyContext
     * @param CompanyUser $companyUser
     * @param UserRoleManagement $userRoleManagement
     * @param CompanyAdminPermission $companyAdminPermission
     * @param CollectionFactory $purchaseOrdersCollectionFactory
     * @param string|null $connectionName
     */
    public function __construct(
        Context $context,
        CompanyStructure $companyStructure,
        CompanyContext $companyContext,
        CompanyUser $companyUser,
        UserRoleManagement $userRoleManagement,
        CompanyAdminPermission $companyAdminPermission,
        CollectionFactory $purchaseOrdersCollectionFactory,
        $connectionName = null
    ) {
        parent::__construct($context, $connectionName);
        $this->companyStructure = $companyStructure;
        $this->companyContext = $companyContext;
        $this->companyUser = $companyUser;
        $this->userRoleManagement = $userRoleManagement;
        $this->purchaseOrdersCollectionFactory = $purchaseOrdersCollectionFactory;
        $this->companyAdminPermission = $companyAdminPermission;
    }

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('purchase_order_applied_rule_approver', AppliedRuleApproverInterface::KEY_ID);
    }

    /**
     * Get purchase order ids with requires approval form specific role.
     *
     * @param string $roleType
     * @param int|null $roleId
     * @return array
     * @throws LocalizedException
     */
    public function getPurchaseOrderIdsByAppliedRole($roleType, $roleId = null)
    {
        $bind = ['role_type' => $roleType];
        $connection = $this->getConnection();
        $select = $connection->select()
            ->from(['poara' => $this->getMainTable()], ['po.entity_id'])
            ->joinLeft(
                ['poar' => $this->getTable('purchase_order_applied_rule')],
                'poara.' . AppliedRuleApproverInterface::KEY_APPLIED_RULE_ID .
                ' = poar.' . AppliedRuleInterface::KEY_ID,
                []
            )->joinLeft(
                ['po' => $this->getTable('purchase_order')],
                'poar.' . AppliedRuleInterface::KEY_PURCHASE_ORDER_ID . ' = po.' . PurchaseOrderInterface::ENTITY_ID
            );

        $whereCondition = 'poara.' . AppliedRuleApproverInterface::KEY_APPROVER_TYPE . ' = :role_type';
        if ($roleType === AppliedRuleApproverInterface::APPROVER_TYPE_ADMIN) {
            $whereCondition = $this->restrictToCompanyAdmin($whereCondition, $bind);
        } elseif ($roleType === AppliedRuleApproverInterface::APPROVER_TYPE_MANAGER) {
            $whereCondition = $this->restrictToManager($whereCondition);
        } else {
            // Filter purchase orders that require approval from specific role
            $bind['role_id'] = $roleId;
            $whereCondition .= ' AND poara.' . AppliedRuleApproverInterface::KEY_ROLE_ID . ' = :role_id';
        }

        $select->where($whereCondition);
        return $connection->fetchCol($select, $bind);
    }

    /**
     * Get purchase order ids that require approval by current customer.
     *
     * @return int
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getIdsRequireApprovalByCurrentCustomer(): int
    {
        $purchaseOrderIds = $this->getPurchaseOrderIdsByCurrentCustomer();
        $customerId = $this->companyContext->getCustomerId();
        $companyId = $this->companyUser->getCurrentCompanyId();
        $connection = $this->getConnection();
        $sql = $connection->select()
            ->from(
                ['main_table' => $this->getTable('purchase_order_applied_rule')],
                ['purchase_order_id']
            )->join(
                ['poara' => $this->getTable('purchase_order_applied_rule_approver')],
                'main_table.applied_rule_id = poara.applied_rule_id'
            )->where('purchase_order_id IN (?)', $purchaseOrderIds)
            ->where('poara.status != ?', AppliedRuleApproverInterface::STATUS_PENDING)
            ->where('customer_id = ?', $customerId);

        $purchaseOrdersIdsProcessedByCurrentCustomer = [];
        foreach ($connection->fetchAll($sql) as $row) {
            $purchaseOrdersIdsProcessedByCurrentCustomer[] = $row['purchase_order_id'];
        }

        $purchaseOrdersCollection = $this->purchaseOrdersCollectionFactory->create();

        return $purchaseOrdersCollection
            ->addFieldToFilter('main_table.status', PurchaseOrderInterface::STATUS_APPROVAL_REQUIRED)
            ->addFieldToFilter('main_table.company_id', $companyId)
            ->addFieldToFilter(
                'main_table.entity_id',
                ['in' => array_diff($purchaseOrderIds, $purchaseOrdersIdsProcessedByCurrentCustomer)]
            )->getTotalCount();
    }

    /**
     * Get purchase order ids by current customer.
     *
     * @return array
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    private function getPurchaseOrderIdsByCurrentCustomer(): array
    {
        $customerId = $this->companyContext->getCustomerId();
        if ($this->companyAdminPermission->isCurrentUserCompanyAdmin()) {
            $purchaseOrderIds = $this->getPurchaseOrderIdsByAppliedRole(
                AppliedRuleApproverInterface::APPROVER_TYPE_ADMIN
            );
        } else {
            $roles = $this->userRoleManagement->getRolesByUserId($customerId);
            $role = current($roles);

            $purchaseOrderIds = $this->getPurchaseOrderIdsByAppliedRole(
                AppliedRuleApproverInterface::APPROVER_TYPE_ROLE,
                $role->getId()
            );

            if ($this->isCurrentCustomerHasSubordinates($customerId)) {
                $managerPurchaseOrderIds = $this->getPurchaseOrderIdsByAppliedRole(
                    AppliedRuleApproverInterface::APPROVER_TYPE_MANAGER
                );
                $purchaseOrderIds = array_merge($managerPurchaseOrderIds, $purchaseOrderIds);
            }
        }

        return array_unique($purchaseOrderIds);
    }

    /**
     * Check if current user is manager.
     *
     * @param int $customerId
     * @return bool
     * @throws LocalizedException
     */
    private function isCurrentCustomerHasSubordinates($customerId)
    {
        return (bool) count($this->companyStructure->getAllowedChildrenIds($customerId));
    }

    /**
     * Restrict query to company admin
     *
     * @param string $whereCondition
     * @param array $bind
     * @return string
     * @throws LocalizedException
     */
    private function restrictToCompanyAdmin(string $whereCondition, array &$bind) : string
    {
        $bind['manager_role_type'] = AppliedRuleApproverInterface::APPROVER_TYPE_MANAGER;
        // Filter purchase orders that require approval from admin user
        $whereCondition .= ' AND poara.' . AppliedRuleApproverInterface::KEY_ROLE_ID . ' IS NULL)' .
            ' OR (poara.' . AppliedRuleApproverInterface::KEY_APPROVER_TYPE . ' = :manager_role_type';

        // The admin could also be a manager, so also pull any manager approval POs
        $whereCondition = $this->restrictToManager($whereCondition);

        return $whereCondition;
    }

    /**
     * Restrict query to the manager
     *
     * @param string $whereCondition
     * @return string
     * @throws LocalizedException
     */
    private function restrictToManager(string $whereCondition) : string
    {
        // Filter subordinates purchase orders that require approval from manager
        $subordinatesIds = $this->companyStructure->getAllowedChildrenIds($this->companyContext->getCustomerId());
        if (count($subordinatesIds) > 0) {
            $whereCondition .= ' AND poara.' . AppliedRuleApproverInterface::KEY_ROLE_ID . ' IS NULL' .
                ' AND po.' . PurchaseOrderInterface::CREATOR_ID . ' in (' . join(',', $subordinatesIds) . ')';
        }

        return $whereCondition;
    }
}
