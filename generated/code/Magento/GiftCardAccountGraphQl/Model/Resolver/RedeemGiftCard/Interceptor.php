<?php
namespace Magento\GiftCardAccountGraphQl\Model\Resolver\RedeemGiftCard;

/**
 * Interceptor class for @see \Magento\GiftCardAccountGraphQl\Model\Resolver\RedeemGiftCard
 */
class Interceptor extends \Magento\GiftCardAccountGraphQl\Model\Resolver\RedeemGiftCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftCardAccount\Api\GiftCardRedeemerInterface $giftCardRedeemer, \Magento\GiftCardAccountGraphQl\Model\DataProvider\GiftCardAccount $gifCardAccountProvider)
    {
        $this->___init();
        parent::__construct($giftCardRedeemer, $gifCardAccountProvider);
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