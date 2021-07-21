<?php
namespace Magento\PurchaseOrder\Model\Customer\Authorization\ApproveRejectPurchaseOrder;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Model\Customer\Authorization\ApproveRejectPurchaseOrder
 */
class Interceptor extends \Magento\PurchaseOrder\Model\Customer\Authorization\ApproveRejectPurchaseOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\Company\Structure $companyStructure, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($companyStructure, $companyContext, $logger);
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
