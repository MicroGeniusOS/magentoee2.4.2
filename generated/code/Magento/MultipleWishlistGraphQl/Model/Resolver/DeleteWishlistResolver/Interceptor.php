<?php
namespace Magento\MultipleWishlistGraphQl\Model\Resolver\DeleteWishlistResolver;

/**
 * Interceptor class for @see \Magento\MultipleWishlistGraphQl\Model\Resolver\DeleteWishlistResolver
 */
class Interceptor extends \Magento\MultipleWishlistGraphQl\Model\Resolver\DeleteWishlistResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\MultipleWishlist\Helper\Data $multipleWishlistHelper, \Magento\Wishlist\Model\ResourceModel\Wishlist\CollectionFactory $wishlistCollectionFactory, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper)
    {
        $this->___init();
        parent::__construct($wishlistConfig, $wishlistResource, $wishlistFactory, $multipleWishlistHelper, $wishlistCollectionFactory, $wishlistDataMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
