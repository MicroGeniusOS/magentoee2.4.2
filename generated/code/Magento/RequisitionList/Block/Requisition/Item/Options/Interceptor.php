<?php
namespace Magento\RequisitionList\Block\Requisition\Item\Options;

/**
 * Interceptor class for @see \Magento\RequisitionList\Block\Requisition\Item\Options
 */
class Interceptor extends \Magento\RequisitionList\Block\Requisition\Item\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Helper\Product\ConfigurationPool $helperPool, \Magento\RequisitionList\Model\RequisitionListItemProduct $requisitionListItemProduct, \Magento\RequisitionList\Model\RequisitionListItemOptionsLocator $requisitionListItemOptionsLocator, array $ignoreTypes = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperPool, $requisitionListItemProduct, $requisitionListItemOptionsLocator, $ignoreTypes, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
