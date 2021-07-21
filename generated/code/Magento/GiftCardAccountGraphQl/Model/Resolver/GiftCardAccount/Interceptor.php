<?php
namespace Magento\GiftCardAccountGraphQl\Model\Resolver\GiftCardAccount;

/**
 * Interceptor class for @see \Magento\GiftCardAccountGraphQl\Model\Resolver\GiftCardAccount
 */
class Interceptor extends \Magento\GiftCardAccountGraphQl\Model\Resolver\GiftCardAccount implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftCardAccountGraphQl\Model\DataProvider\GiftCardAccount $giftCardAccountProvider)
    {
        $this->___init();
        parent::__construct($giftCardAccountProvider);
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
