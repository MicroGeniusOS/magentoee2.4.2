<?php
namespace Magento\CustomerBalanceGraphQl\Model\Resolver\GetAppliedStoreCreditFromCart;

/**
 * Interceptor class for @see \Magento\CustomerBalanceGraphQl\Model\Resolver\GetAppliedStoreCreditFromCart
 */
class Interceptor extends \Magento\CustomerBalanceGraphQl\Model\Resolver\GetAppliedStoreCreditFromCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CustomerBalance\Model\BalanceFactory $balanceFactory, \Magento\CustomerBalance\Helper\Data $customerBalanceHelper)
    {
        $this->___init();
        parent::__construct($getCartForUser, $cartRepository, $priceCurrency, $balanceFactory, $customerBalanceHelper);
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
