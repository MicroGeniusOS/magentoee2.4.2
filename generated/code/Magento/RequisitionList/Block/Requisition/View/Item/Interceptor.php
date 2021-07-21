<?php
namespace Magento\RequisitionList\Block\Requisition\View\Item;

/**
 * Interceptor class for @see \Magento\RequisitionList\Block\Requisition\View\Item
 */
class Interceptor extends \Magento\RequisitionList\Block\Requisition\View\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\RequisitionList\Model\Checker\ProductChangesAvailability $productChangesAvailabilityChecker, \Magento\RequisitionList\Model\RequisitionListItemProduct $requisitionListItemProduct, array $data = [], ?\Magento\RequisitionList\Model\RequisitionListItemOptionsLocator $itemOptionsLocator = null, ?\Magento\Catalog\Model\Product\Configuration\Item\ItemResolverInterface $itemResolver = null)
    {
        $this->___init();
        parent::__construct($context, $priceCurrency, $productChangesAvailabilityChecker, $requisitionListItemProduct, $data, $itemOptionsLocator, $itemResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUrlByItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrlByItem');
        return $pluginInfo ? $this->___callPlugins('getProductUrlByItem', func_get_args(), $pluginInfo) : parent::getProductUrlByItem();
    }
}
