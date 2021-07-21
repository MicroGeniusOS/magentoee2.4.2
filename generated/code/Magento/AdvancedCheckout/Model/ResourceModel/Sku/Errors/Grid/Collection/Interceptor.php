<?php
namespace Magento\AdvancedCheckout\Model\ResourceModel\Sku\Errors\Grid\Collection;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Model\ResourceModel\Sku\Errors\Grid\Collection
 */
class Interceptor extends \Magento\AdvancedCheckout\Model\ResourceModel\Sku\Errors\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\AdvancedCheckout\Model\Cart $cart, \Magento\Catalog\Model\Product $productModel, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($entityFactory, $cart, $productModel, $priceCurrency, $stockRegistry);
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
