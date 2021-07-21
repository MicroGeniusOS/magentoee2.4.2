<?php
namespace Magento\SharedCatalog\Model\ProductItemRepository;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\ProductItemRepository
 */
class Interceptor extends \Magento\SharedCatalog\Model\ProductItemRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SharedCatalog\Model\ProductItemFactory $sharedCatalogProductItemFactory, \Magento\SharedCatalog\Model\ResourceModel\ProductItem $sharedCatalogProductItemResource, \Magento\SharedCatalog\Model\ResourceModel\ProductItem\CollectionFactory $sharedCatalogProductItemCollectionFactory, \Magento\SharedCatalog\Api\Data\ProductItemSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor)
    {
        $this->___init();
        parent::__construct($sharedCatalogProductItemFactory, $sharedCatalogProductItemResource, $sharedCatalogProductItemCollectionFactory, $searchResultsFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\SharedCatalog\Api\Data\ProductItemInterface $sharedCatalogProductItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($sharedCatalogProductItem);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array $sharedCatalogProductItems)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteItems');
        return $pluginInfo ? $this->___callPlugins('deleteItems', func_get_args(), $pluginInfo) : parent::deleteItems($sharedCatalogProductItems);
    }
}
