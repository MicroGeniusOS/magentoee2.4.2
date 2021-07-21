<?php
namespace Magento\PurchaseOrder\Model\Customer\Authorization\ViewPurchaseOrder;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Model\Customer\Authorization\ViewPurchaseOrder
 */
class Interceptor extends \Magento\PurchaseOrder\Model\Customer\Authorization\ViewPurchaseOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\CompanyContext $companyContext, \Magento\Company\Model\CompanyManagement $companyManagement, \Magento\Company\Model\Company\Structure $companyStructure, \Magento\Company\Model\ResourceModel\Customer $customerResource)
    {
        $this->___init();
        parent::__construct($companyContext, $companyManagement, $companyStructure, $customerResource);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed(\Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface $purchaseOrder) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed($purchaseOrder);
    }
}
