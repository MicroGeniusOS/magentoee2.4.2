<?php
namespace Magento\CatalogRuleStaging\Pricing\Price\CatalogRulePrice;

/**
 * Interceptor class for @see \Magento\CatalogRuleStaging\Pricing\Price\CatalogRulePrice
 */
class Interceptor extends \Magento\CatalogRuleStaging\Pricing\Price\CatalogRulePrice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product $saleableItem, $quantity, \Magento\Framework\Pricing\Adjustment\Calculator $calculator, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $dateTime, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogRule\Model\ResourceModel\Rule $ruleResource, \Magento\CatalogRule\Model\ResourceModel\Rule\CollectionFactory $ruleCollectionFactory, \Magento\Staging\Model\VersionManager $versionManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($saleableItem, $quantity, $calculator, $priceCurrency, $dateTime, $storeManager, $customerSession, $ruleResource, $ruleCollectionFactory, $versionManager, $productRepository, $searchCriteriaBuilder, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue();
    }
}
