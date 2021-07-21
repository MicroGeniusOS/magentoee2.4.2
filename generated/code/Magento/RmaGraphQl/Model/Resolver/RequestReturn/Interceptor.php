<?php
namespace Magento\RmaGraphQl\Model\Resolver\RequestReturn;

/**
 * Interceptor class for @see \Magento\RmaGraphQl\Model\Resolver\RequestReturn
 */
class Interceptor extends \Magento\RmaGraphQl\Model\Resolver\RequestReturn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RmaGraphQl\Model\Rma\Comment $comment, \Magento\RmaGraphQl\Model\Formatter\Rma $rmaFormatter, \Magento\RmaGraphQl\Model\ResolverAccess $resolverAccess, \Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\Framework\GraphQl\Query\Uid $idEncoder, \Magento\RmaGraphQl\Model\Rma\RequestRma $requestRma)
    {
        $this->___init();
        parent::__construct($comment, $rmaFormatter, $resolverAccess, $getCustomer, $idEncoder, $requestRma);
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
