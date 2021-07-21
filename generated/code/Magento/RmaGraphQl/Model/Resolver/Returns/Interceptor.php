<?php
namespace Magento\RmaGraphQl\Model\Resolver\Returns;

/**
 * Interceptor class for @see \Magento\RmaGraphQl\Model\Resolver\Returns
 */
class Interceptor extends \Magento\RmaGraphQl\Model\Resolver\Returns implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Rma\Api\RmaRepositoryInterface $rmaRepository, \Magento\RmaGraphQl\Model\Formatter\Returns $returnsFormatter, \Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\RmaGraphQl\Model\ResolverAccess $resolverAccess)
    {
        $this->___init();
        parent::__construct($searchCriteriaBuilder, $rmaRepository, $returnsFormatter, $getCustomer, $resolverAccess);
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
