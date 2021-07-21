<?php
namespace Magento\CustomerBalanceGraphQl\Model\Resolver\ApplyStoreCreditToCart;

/**
 * Interceptor class for @see \Magento\CustomerBalanceGraphQl\Model\Resolver\ApplyStoreCreditToCart
 */
class Interceptor extends \Magento\CustomerBalanceGraphQl\Model\Resolver\ApplyStoreCreditToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\CustomerBalance\Api\BalanceManagementInterface $balanceManagement, \Magento\CustomerBalance\Helper\Data $customerBalanceHelper)
    {
        $this->___init();
        parent::__construct($getCartForUser, $balanceManagement, $customerBalanceHelper);
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
