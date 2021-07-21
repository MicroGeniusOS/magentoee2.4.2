<?php
namespace Magento\NegotiableQuote\Model\ResourceModel\Sku\Errors\Grid\Collection;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\ResourceModel\Sku\Errors\Grid\Collection
 */
class Interceptor extends \Magento\NegotiableQuote\Model\ResourceModel\Sku\Errors\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\AdvancedCheckout\Model\Cart $cart, \Magento\Catalog\Api\Data\ProductInterfaceFactory $productFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($entityFactory, $cart, $productFactory, $priceCurrency, $stockRegistry);
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
