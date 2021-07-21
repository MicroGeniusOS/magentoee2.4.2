<?php
namespace Magento\RewardGraphQl\Model\Resolver\RemoveRewardPoints;

/**
 * Interceptor class for @see \Magento\RewardGraphQl\Model\Resolver\RemoveRewardPoints
 */
class Interceptor extends \Magento\RewardGraphQl\Model\Resolver\RemoveRewardPoints implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RewardGraphQl\Model\Config $config, \Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Quote\Api\CartRepositoryInterface $cartRepository)
    {
        $this->___init();
        parent::__construct($config, $getCartForUser, $cartRepository);
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
