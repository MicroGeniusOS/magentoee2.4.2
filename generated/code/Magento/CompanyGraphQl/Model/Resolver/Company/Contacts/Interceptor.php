<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\Contacts;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\Contacts
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\Contacts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData $customerData, \Magento\User\Model\UserFactory $userFactory, \Magento\User\Model\ResourceModel\User $userResource, \Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($customerData, $userFactory, $userResource, $getCustomer, $resolverAccess, $customerRepository, $allowedResources);
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
