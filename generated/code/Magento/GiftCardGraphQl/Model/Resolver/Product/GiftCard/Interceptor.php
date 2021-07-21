<?php
namespace Magento\GiftCardGraphQl\Model\Resolver\Product\GiftCard;

/**
 * Interceptor class for @see \Magento\GiftCardGraphQl\Model\Resolver\Product\GiftCard
 */
class Interceptor extends \Magento\GiftCardGraphQl\Model\Resolver\Product\GiftCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\EnumLookup $enumLookup)
    {
        $this->___init();
        parent::__construct($enumLookup);
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
