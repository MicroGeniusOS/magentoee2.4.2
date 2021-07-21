<?php
namespace Magento\RequisitionList\Model\RequisitionListItem\Validator\Stock;

/**
 * Interceptor class for @see \Magento\RequisitionList\Model\RequisitionListItem\Validator\Stock
 */
class Interceptor extends \Magento\RequisitionList\Model\RequisitionListItem\Validator\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\RequisitionList\Model\RequisitionListItemProduct $requisitionListItemProduct, \Magento\CatalogInventory\Api\StockStateInterface $stockState)
    {
        $this->___init();
        parent::__construct($stockRegistry, $requisitionListItemProduct, $stockState);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\RequisitionList\Api\Data\RequisitionListItemInterface $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($item);
    }
}
