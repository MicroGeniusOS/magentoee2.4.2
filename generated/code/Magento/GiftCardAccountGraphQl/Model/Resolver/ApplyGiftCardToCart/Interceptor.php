<?php
namespace Magento\GiftCardAccountGraphQl\Model\Resolver\ApplyGiftCardToCart;

/**
 * Interceptor class for @see \Magento\GiftCardAccountGraphQl\Model\Resolver\ApplyGiftCardToCart
 */
class Interceptor extends \Magento\GiftCardAccountGraphQl\Model\Resolver\ApplyGiftCardToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\GiftCardAccount\Api\GiftCardAccountManagementInterface $giftCardAccountManagement, \Magento\GiftCardAccount\Api\Data\GiftCardAccountInterfaceFactory $giftCardAccountFactory)
    {
        $this->___init();
        parent::__construct($getCartForUser, $giftCardAccountManagement, $giftCardAccountFactory);
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
