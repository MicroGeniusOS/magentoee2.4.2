<?php
namespace Magento\RequisitionList\Model\RequisitionListItem\SaveHandler;

/**
 * Interceptor class for @see \Magento\RequisitionList\Model\RequisitionListItem\SaveHandler
 */
class Interceptor extends \Magento\RequisitionList\Model\RequisitionListItem\SaveHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\RequisitionList\Model\RequisitionListItem\Options\Builder $optionsBuilder, \Magento\RequisitionList\Api\RequisitionListManagementInterface $requisitionListManagement, \Magento\RequisitionList\Model\RequisitionListItem\Locator $requisitionListItemLocator, \Magento\RequisitionList\Model\RequisitionListProduct $requisitionListProduct, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($requisitionListRepository, $optionsBuilder, $requisitionListManagement, $requisitionListItemLocator, $requisitionListProduct, $stockRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function saveItem(\Magento\Framework\DataObject $productData, array $options, $itemId, $listId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveItem');
        return $pluginInfo ? $this->___callPlugins('saveItem', func_get_args(), $pluginInfo) : parent::saveItem($productData, $options, $itemId, $listId);
    }
}
