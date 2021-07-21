<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\StockProcessor;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\StockProcessor
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\StockProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfig, \Magento\CatalogInventory\Model\ResourceModel\Stock\Status $stockStatusResource)
    {
        $this->___init();
        parent::__construct($stockConfig, $stockStatusResource);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Catalog\Model\ResourceModel\Product\Collection $collection, \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria, array $attributeNames, ?\Magento\GraphQl\Model\Query\ContextInterface $context = null) : \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($collection, $searchCriteria, $attributeNames, $context);
    }
}
