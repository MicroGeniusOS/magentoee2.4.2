<?php
namespace Magento\Wishlist\Block\Item\Configure;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Item\Configure
 */
class Interceptor extends \Magento\Wishlist\Block\Item\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Helper\Data $wishlistData, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $wishlistData, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getWishlistOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWishlistOptions');
        return $pluginInfo ? $this->___callPlugins('getWishlistOptions', func_get_args(), $pluginInfo) : parent::getWishlistOptions();
    }
}
