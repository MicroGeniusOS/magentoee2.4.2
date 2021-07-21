<?php
namespace Magento\ConfigurableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\ConfigurableOptions;

/**
 * Interceptor class for @see \Magento\ConfigurableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\ConfigurableOptions
 */
class Interceptor extends \Magento\ConfigurableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\ConfigurableOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Product\Configuration $configurationHelper, \Magento\ConfigurableRequisitionListGraphQl\Model\RequisitionList\Item\DataProvider\ConfigurableOptionType $configurableOptionDataProvider)
    {
        $this->___init();
        parent::__construct($configurationHelper, $configurableOptionDataProvider);
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
