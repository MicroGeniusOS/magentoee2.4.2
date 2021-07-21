<?php
namespace Magento\GiftCardAccountGraphQl\Model\Resolver\GetAppliedGiftCardsFromCart;

/**
 * Interceptor class for @see \Magento\GiftCardAccountGraphQl\Model\Resolver\GetAppliedGiftCardsFromCart
 */
class Interceptor extends \Magento\GiftCardAccountGraphQl\Model\Resolver\GetAppliedGiftCardsFromCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftCardAccount\Api\GiftCardAccountManagementInterface $giftCardAccountManagement, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalRepository, \Magento\Framework\Serialize\Serializer\Json $json, \Magento\GiftCardAccount\Api\GiftCardAccountRepositoryInterface $giftCardAccountRepository, \Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder, \Magento\GiftCardAccountGraphQl\Model\Money\Formatter $moneyFormatter)
    {
        $this->___init();
        parent::__construct($giftCardAccountManagement, $cartTotalRepository, $json, $giftCardAccountRepository, $criteriaBuilder, $moneyFormatter);
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
