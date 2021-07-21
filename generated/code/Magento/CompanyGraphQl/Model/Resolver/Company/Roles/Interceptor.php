<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\Roles;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\Roles
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\Roles implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\ResourceModel\UserRole\CollectionFactory $userRoleCollectionFactory, \Magento\Company\Model\ResourceModel\Role\CollectionFactory $roleCollectionFactory, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\Role\PermissionsFormatter $permissionsFormatter, \Magento\Company\Model\Role\Permission $permission, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($userRoleCollectionFactory, $roleCollectionFactory, $resolverAccess, $idEncoder, $permissionsFormatter, $permission, $allowedResources);
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
