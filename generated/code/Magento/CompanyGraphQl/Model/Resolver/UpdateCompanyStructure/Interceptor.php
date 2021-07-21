<?php
namespace Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyStructure;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyStructure
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyStructure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\Company\Structure $companyStructure, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\Company\Api\CompanyManagementInterface $companyManagement, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($companyStructure, $resolverAccess, $idEncoder, $companyManagement, $allowedResources);
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
