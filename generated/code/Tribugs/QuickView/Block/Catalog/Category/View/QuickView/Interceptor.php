<?php
namespace Tribugs\QuickView\Block\Catalog\Category\View\QuickView;

/**
 * Interceptor class for @see \Tribugs\QuickView\Block\Catalog\Category\View\QuickView
 */
class Interceptor extends \Tribugs\QuickView\Block\Catalog\Category\View\QuickView implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Registry $coreRegistry)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry);
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
