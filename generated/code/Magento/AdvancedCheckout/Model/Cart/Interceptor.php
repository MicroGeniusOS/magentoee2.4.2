<?php
namespace Magento\AdvancedCheckout\Model\Cart;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Model\Cart
 */
class Interceptor extends \Magento\AdvancedCheckout\Model\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Cart $cart, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\AdvancedCheckout\Helper\Data $checkoutData, \Magento\Catalog\Model\Product\OptionFactory $optionFactory, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Catalog\Model\Product\CartConfiguration $productConfiguration, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, \Magento\CatalogInventory\Helper\Stock $stockHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Quote\Model\QuoteFactory $quoteFactory, $itemFailedStatus = 'failed_sku', array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\AdvancedCheckout\Model\IsProductInStockInterface $isProductInStock = null, ?\Magento\AdvancedCheckout\Model\AreProductsSalableForRequestedQtyInterface $areProductsSalableForRequestedQty = null, ?\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($cart, $messageFactory, $eventManager, $checkoutData, $optionFactory, $wishlistFactory, $quoteRepository, $storeManager, $localeFormat, $messageManager, $productTypeConfig, $productConfiguration, $customerSession, $stockRegistry, $stockState, $stockHelper, $productRepository, $quoteFactory, $itemFailedStatus, $data, $serializer, $searchCriteriaBuilder, $isProductInStock, $areProductsSalableForRequestedQty, $productCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAddProductsBySku(array $items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAddProductsBySku');
        return $pluginInfo ? $this->___callPlugins('prepareAddProductsBySku', func_get_args(), $pluginInfo) : parent::prepareAddProductsBySku($items);
    }

    /**
     * {@inheritdoc}
     */
    public function checkItems(array $items) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkItems');
        return $pluginInfo ? $this->___callPlugins('checkItems', func_get_args(), $pluginInfo) : parent::checkItems($items);
    }

    /**
     * {@inheritdoc}
     */
    public function checkItem($sku, $qty, $config = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkItem');
        return $pluginInfo ? $this->___callPlugins('checkItem', func_get_args(), $pluginInfo) : parent::checkItem($sku, $qty, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedItems($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedItems');
        return $pluginInfo ? $this->___callPlugins('getAffectedItems', func_get_args(), $pluginInfo) : parent::getAffectedItems($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function setAffectedItems($items, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAffectedItems');
        return $pluginInfo ? $this->___callPlugins('setAffectedItems', func_get_args(), $pluginInfo) : parent::setAffectedItems($items, $storeId);
    }
}
