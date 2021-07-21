<?php
namespace Magento\RmaGraphQl\Model\Resolver\AddReturnTracking;

/**
 * Interceptor class for @see \Magento\RmaGraphQl\Model\Resolver\AddReturnTracking
 */
class Interceptor extends \Magento\RmaGraphQl\Model\Resolver\AddReturnTracking implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RmaGraphQl\Model\Formatter\Rma $rmaFormatter, \Magento\RmaGraphQl\Model\Formatter\Tracking $trackingFormatter, \Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\RmaGraphQl\Model\ResolverAccess $resolverAccess, \Magento\RmaGraphQl\Model\Rma\Tracking\AddTracking $addTracking)
    {
        $this->___init();
        parent::__construct($rmaFormatter, $trackingFormatter, $getCustomer, $resolverAccess, $addTracking);
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
