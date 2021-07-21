<?php
namespace Magento\BundleRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\BundleOptions;

/**
 * Interceptor class for @see \Magento\BundleRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\BundleOptions
 */
class Interceptor extends \Magento\BundleRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\BundleOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\BundleRequisitionListGraphQl\Model\RequisitionList\Item\DataProvider\BundleOptionType $bundleOptionDataProvider)
    {
        $this->___init();
        parent::__construct($bundleOptionDataProvider);
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
