<?php
namespace Magento\GiftRegistry\Block\Wishlist\Item\Column\Registry;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\Wishlist\Item\Column\Registry
 */
class Interceptor extends \Magento\GiftRegistry\Block\Wishlist\Item\Column\Registry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\GiftRegistry\Helper\Data $giftRegistryData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $giftRegistryData, $data);
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
