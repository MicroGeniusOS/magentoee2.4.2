<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CompositeCollectionProcessor;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CompositeCollectionProcessor
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CompositeCollectionProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $collectionProcessors = [])
    {
        $this->___init();
        parent::__construct($collectionProcessors);
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
