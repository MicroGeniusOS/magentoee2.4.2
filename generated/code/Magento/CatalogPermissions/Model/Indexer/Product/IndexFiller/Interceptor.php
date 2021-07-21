<?php
namespace Magento\CatalogPermissions\Model\Indexer\Product\IndexFiller;

/**
 * Interceptor class for @see \Magento\CatalogPermissions\Model\Indexer\Product\IndexFiller
 */
class Interceptor extends \Magento\CatalogPermissions\Model\Indexer\Product\IndexFiller implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\DB\Query\Generator $queryGenerator, \Magento\CatalogPermissions\Model\Indexer\Product\Action\ProductSelectDataProvider $selectDataProvider, int $batchSize = 10000, string $connectionName = 'indexer')
    {
        $this->___init();
        parent::__construct($resource, $queryGenerator, $selectDataProvider, $batchSize, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function populate(\Magento\Store\Api\Data\StoreInterface $store, int $customerGroupId, string $categoryPermissionsTable, string $productPermissionsTable, array $productIds = []) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'populate');
        $pluginInfo ? $this->___callPlugins('populate', func_get_args(), $pluginInfo) : parent::populate($store, $customerGroupId, $categoryPermissionsTable, $productPermissionsTable, $productIds);
    }
}
