<?php
namespace Magento\GiftCardRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\GiftCard;

/**
 * Interceptor class for @see \Magento\GiftCardRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\GiftCard
 */
class Interceptor extends \Magento\GiftCardRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\GiftCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftCardRequisitionListGraphQl\Model\RequisitionList\Item\DataProvider\GiftCardOptionType $giftCardType)
    {
        $this->___init();
        parent::__construct($giftCardType);
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
