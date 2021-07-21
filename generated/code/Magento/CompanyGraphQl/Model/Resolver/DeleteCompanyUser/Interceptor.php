<?php
namespace Magento\CompanyGraphQl\Model\Resolver\DeleteCompanyUser;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\DeleteCompanyUser
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\DeleteCompanyUser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Users\DeleteCompanyUser $deleteCompanyUser, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess)
    {
        $this->___init();
        parent::__construct($deleteCompanyUser, $idEncoder, $resolverAccess);
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
