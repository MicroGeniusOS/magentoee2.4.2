<?php
namespace Magento\CatalogPermissionsGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\ApplyCategoryPermissionsOnProductProcessor;

/**
 * Interceptor class for @see \Magento\CatalogPermissionsGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\ApplyCategoryPermissionsOnProductProcessor
 */
class Interceptor extends \Magento\CatalogPermissionsGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessor\ApplyCategoryPermissionsOnProductProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogPermissions\App\ConfigInterface $permissionsConfig, \Magento\CatalogPermissions\Helper\Data $catalogPermissionsData, \Magento\CatalogPermissions\Model\ResourceModel\Permission\IndexFactory $permissionIndexFactory, \Magento\CatalogPermissionsGraphQl\Model\Customer\GroupProcessor $groupProcessor, \Magento\CatalogPermissionsGraphQl\Model\Store\StoreProcessor $storeProcessor)
    {
        $this->___init();
        parent::__construct($permissionsConfig, $catalogPermissionsData, $permissionIndexFactory, $groupProcessor, $storeProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Catalog\Model\ResourceModel\Product\Collection $collection, \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria, array $attributeNames, ?\Magento\GraphQl\Model\Query\ContextInterface $context = null) : \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($collection, $searchCriteria, $attributeNames, $context);
    }
}
