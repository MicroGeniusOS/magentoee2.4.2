<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\LegalAddress;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\LegalAddress
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\LegalAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Directory\Model\ResourceModel\Region $regionResource, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($regionResource, $regionFactory, $resolverAccess, $allowedResources);
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
