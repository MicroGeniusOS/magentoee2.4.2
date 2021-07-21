<?php
namespace Magento\SharedCatalog\Model\Repository;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\Repository
 */
class Interceptor extends \Magento\SharedCatalog\Model\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SharedCatalog\Model\ResourceModel\SharedCatalog $sharedCatalogResource, \Magento\SharedCatalog\Model\ResourceModel\SharedCatalog\CollectionFactory $sharedCatalogCollectionFactory, \Magento\SharedCatalog\Api\Data\SearchResultsInterfaceFactory $searchResultsFactory, \Magento\SharedCatalog\Api\ProductItemManagementInterface $sharedCatalogProductItemManagement, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor, \Magento\SharedCatalog\Model\SharedCatalogValidator $validator, \Magento\SharedCatalog\Model\SaveHandler $saveHandler)
    {
        $this->___init();
        parent::__construct($sharedCatalogResource, $sharedCatalogCollectionFactory, $searchResultsFactory, $sharedCatalogProductItemManagement, $collectionProcessor, $validator, $saveHandler);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\SharedCatalog\Api\Data\SharedCatalogInterface $sharedCatalog)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($sharedCatalog);
    }
}
