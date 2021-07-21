<?php
namespace Magento\MultipleWishlistGraphQl\Model\Resolver\CreateWishlistResolver;

/**
 * Interceptor class for @see \Magento\MultipleWishlistGraphQl\Model\Resolver\CreateWishlistResolver
 */
class Interceptor extends \Magento\MultipleWishlistGraphQl\Model\Resolver\CreateWishlistResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\MultipleWishlist\Model\WishlistEditor $wishlistEditor, \Magento\Framework\GraphQl\Schema\Type\Enum\DataMapperInterface $enumDataMapper, \Magento\MultipleWishlist\Helper\Data $multipleWishlistConfig, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper)
    {
        $this->___init();
        parent::__construct($wishlistConfig, $wishlistEditor, $enumDataMapper, $multipleWishlistConfig, $wishlistDataMapper);
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
