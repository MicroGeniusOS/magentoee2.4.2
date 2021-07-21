<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\User;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\User
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData $customerData, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\Users\Customer $customerUser, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($customerData, $resolverAccess, $idEncoder, $customerUser, $allowedResources);
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
