<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\Structure;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\Structure
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\Company\Structure $treeManagement, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\StructureFactory $structureFactory, \Magento\CompanyGraphQl\Model\Company\Structure\Validate $validateStructure, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($treeManagement, $resolverAccess, $idEncoder, $structureFactory, $validateStructure, $allowedResources);
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
