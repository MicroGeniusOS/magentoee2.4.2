<?php
namespace Magento\RmaGraphQl\Model\Resolver\Rma;

/**
 * Interceptor class for @see \Magento\RmaGraphQl\Model\Resolver\Rma
 */
class Interceptor extends \Magento\RmaGraphQl\Model\Resolver\Rma implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RmaGraphQl\Model\Validator $validator, \Magento\RmaGraphQl\Model\Formatter\Rma $rmaFormatter, \Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\Framework\GraphQl\Query\Uid $idEncoder, \Magento\RmaGraphQl\Model\ResolverAccess $resolverAccess)
    {
        $this->___init();
        parent::__construct($validator, $rmaFormatter, $getCustomer, $idEncoder, $resolverAccess);
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
