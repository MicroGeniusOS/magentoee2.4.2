<?php
namespace Magento\PurchaseOrder\Block\PurchaseOrder\Grid;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Block\PurchaseOrder\Grid
 */
class Interceptor extends \Magento\PurchaseOrder\Block\PurchaseOrder\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\PurchaseOrder\Model\Config $purchaseOrderConfig, \Magento\Company\Api\AuthorizationInterface $authorization, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\Company\Model\Company\Structure $companyStructure, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $purchaseOrderConfig, $authorization, $userContext, $companyStructure, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed();
    }
}
