<?php
namespace Magento\RequisitionListGraphQl\Model\Resolver\RequisitionList\UpdateItems;

/**
 * Interceptor class for @see \Magento\RequisitionListGraphQl\Model\Resolver\RequisitionList\UpdateItems
 */
class Interceptor extends \Magento\RequisitionListGraphQl\Model\Resolver\RequisitionList\UpdateItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RequisitionListGraphQl\Model\RequisitionList\Get $getRequisitionList, \Magento\RequisitionListGraphQl\Model\RequisitionList\Item\UpdateItems $updateItemsModel, \Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter, \Magento\Framework\GraphQl\Query\Uid $idEncoder, \Magento\RequisitionList\Model\Config $moduleConfig)
    {
        $this->___init();
        parent::__construct($getRequisitionList, $updateItemsModel, $dataObjectConverter, $idEncoder, $moduleConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
