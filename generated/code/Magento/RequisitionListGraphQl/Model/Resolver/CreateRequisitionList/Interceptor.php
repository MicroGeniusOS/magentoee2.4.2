<?php
namespace Magento\RequisitionListGraphQl\Model\Resolver\CreateRequisitionList;

/**
 * Interceptor class for @see \Magento\RequisitionListGraphQl\Model\Resolver\CreateRequisitionList
 */
class Interceptor extends \Magento\RequisitionListGraphQl\Model\Resolver\CreateRequisitionList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RequisitionListGraphQl\Model\RequisitionList\Create $createRequisition, \Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter, \Magento\Framework\GraphQl\Query\Uid $idEncoder, \Magento\RequisitionList\Model\Config $moduleConfig)
    {
        $this->___init();
        parent::__construct($createRequisition, $dataObjectConverter, $idEncoder, $moduleConfig);
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
