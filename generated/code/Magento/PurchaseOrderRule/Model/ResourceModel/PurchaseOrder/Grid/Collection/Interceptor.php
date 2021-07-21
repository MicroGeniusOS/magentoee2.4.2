<?php
namespace Magento\PurchaseOrderRule\Model\ResourceModel\PurchaseOrder\Grid\Collection;

/**
 * Interceptor class for @see \Magento\PurchaseOrderRule\Model\ResourceModel\PurchaseOrder\Grid\Collection
 */
class Interceptor extends \Magento\PurchaseOrderRule\Model\ResourceModel\PurchaseOrder\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\CompanyContext $companyContext, \Magento\Company\Model\ResourceModel\Customer $customerResource, \Magento\Company\Model\Company\Structure $companyStructure, \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Company\Model\UserRoleManagement $userRoleManagement, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\PurchaseOrderRule\Model\ResourceModel\AppliedRuleApprover $appliedRuleApprover, $mainTable = 'purchase_order', $resourceModel = 'Magento\\PurchaseOrder\\Model\\ResourceModel\\PurchaseOrder\\Collection')
    {
        $this->___init();
        parent::__construct($companyContext, $customerResource, $companyStructure, $entityFactory, $logger, $fetchStrategy, $eventManager, $userRoleManagement, $companyRepository, $appliedRuleApprover, $mainTable, $resourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        return $pluginInfo ? $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo) : parent::getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
