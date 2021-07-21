<?php
namespace Magento\GiftCardAccountGraphQl\Model\Resolver\RemoveGiftCardFromCart;

/**
 * Interceptor class for @see \Magento\GiftCardAccountGraphQl\Model\Resolver\RemoveGiftCardFromCart
 */
class Interceptor extends \Magento\GiftCardAccountGraphQl\Model\Resolver\RemoveGiftCardFromCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\GiftCardAccount\Api\GiftCardAccountManagementInterface $giftCardAccountManagement)
    {
        $this->___init();
        parent::__construct($getCartForUser, $giftCardAccountManagement);
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
