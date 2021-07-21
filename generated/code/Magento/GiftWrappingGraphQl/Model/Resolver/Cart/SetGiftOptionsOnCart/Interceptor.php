<?php
namespace Magento\GiftWrappingGraphQl\Model\Resolver\Cart\SetGiftOptionsOnCart;

/**
 * Interceptor class for @see \Magento\GiftWrappingGraphQl\Model\Resolver\Cart\SetGiftOptionsOnCart
 */
class Interceptor extends \Magento\GiftWrappingGraphQl\Model\Resolver\Cart\SetGiftOptionsOnCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\GuestCartRepositoryInterface $guestCartRepository, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\GiftMessage\Model\MessageFactory $messageFactory, \Magento\GiftMessage\Model\ResourceModel\Message $messageResource, \Magento\GiftMessage\Helper\Message $giftMessageHelper, \Magento\GiftWrapping\Api\WrappingRepositoryInterface $wrappingRepository, \Magento\GiftWrapping\Helper\Data $giftWrappingData)
    {
        $this->___init();
        parent::__construct($guestCartRepository, $cartRepository, $messageFactory, $messageResource, $giftMessageHelper, $wrappingRepository, $giftWrappingData);
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
