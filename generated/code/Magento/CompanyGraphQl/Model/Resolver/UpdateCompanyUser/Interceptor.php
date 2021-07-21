<?php
namespace Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyUser;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyUser
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyUser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Users\UpdateCompanyUser $updateCompanyUser, \Magento\CompanyGraphQl\Model\Company\Users\Formatter $userFormatter, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\Users\Validator $validator, \Magento\CompanyGraphQl\Helper\Data $helper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository)
    {
        $this->___init();
        parent::__construct($updateCompanyUser, $userFormatter, $resolverAccess, $idEncoder, $validator, $helper, $customerRepository);
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
