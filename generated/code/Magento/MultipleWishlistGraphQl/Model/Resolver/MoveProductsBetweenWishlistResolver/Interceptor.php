<?php
namespace Magento\MultipleWishlistGraphQl\Model\Resolver\MoveProductsBetweenWishlistResolver;

/**
 * Interceptor class for @see \Magento\MultipleWishlistGraphQl\Model\Resolver\MoveProductsBetweenWishlistResolver
 */
class Interceptor extends \Magento\MultipleWishlistGraphQl\Model\Resolver\MoveProductsBetweenWishlistResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\MultipleWishlist\Model\Wishlist\MoveProductsInWishlist $moveProductsInWishlist, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper, \Magento\MultipleWishlist\Helper\Data $multipleWishlistHelper)
    {
        $this->___init();
        parent::__construct($wishlistResource, $wishlistFactory, $wishlistConfig, $moveProductsInWishlist, $wishlistDataMapper, $multipleWishlistHelper);
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
