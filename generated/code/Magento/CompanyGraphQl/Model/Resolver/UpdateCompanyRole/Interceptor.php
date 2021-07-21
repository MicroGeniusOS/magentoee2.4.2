<?php
namespace Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyRole;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyRole
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyRole implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Role\UpdateRole $updateRole, \Magento\Company\Model\Role\Permission $permission, \Magento\CompanyGraphQl\Model\Company\Role\PermissionsFormatter $permissionsFormatter, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder)
    {
        $this->___init();
        parent::__construct($updateRole, $permission, $permissionsFormatter, $resolverAccess, $idEncoder);
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
