<?php
namespace Magento\RequisitionListGraphQl\Model\RequisitionList\Item\AddItemsToRequisitionList;

/**
 * Interceptor class for @see \Magento\RequisitionListGraphQl\Model\RequisitionList\Item\AddItemsToRequisitionList
 */
class Interceptor extends \Magento\RequisitionListGraphQl\Model\RequisitionList\Item\AddItemsToRequisitionList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\Cart\BuyRequest\BuyRequestBuilder $requestBuilder, \Magento\RequisitionList\Model\RequisitionListItem\Options\Builder $optionsBuilder, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\RequisitionList\Model\RequisitionListItem\SaveHandler $requisitionSaveHandler)
    {
        $this->___init();
        parent::__construct($requestBuilder, $optionsBuilder, $productRepository, $requisitionSaveHandler);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareOptions(array $options, \Magento\Catalog\Api\Data\ProductInterface $product, float $qty) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareOptions');
        return $pluginInfo ? $this->___callPlugins('prepareOptions', func_get_args(), $pluginInfo) : parent::prepareOptions($options, $product, $qty);
    }
}
