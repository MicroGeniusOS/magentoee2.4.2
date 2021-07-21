<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SharedCatalog\Model\SearchAdapter\Aggregation\Builder;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ResourceModel\Product as ProductResource;
use Magento\CatalogInventory\Model\Configuration;
use Magento\CatalogInventory\Model\Stock;
use Magento\Customer\Model\Session;
use Magento\Eav\Model\Config as EavConfig;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\App\ScopeResolverInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Select;
use Magento\Framework\Search\Request\BucketInterface;
use Magento\SharedCatalog\Model\ResourceModel\ProductItem as ProductItemResource;
use Magento\Store\Model\ScopeInterface;

/**
 * DataProvider for SharedCatalog aggregation builder.
 *
 * @SuppressWarnings(PHPMD.CookieAndSessionMisuse)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class DataProvider
{
    /**
     * @var ResourceConnection
     */
    private $resource;

    /**
     * @var AdapterInterface
     */
    private $connection;

    /**
     * @var ScopeResolverInterface
     */
    private $scopeResolver;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var EavConfig
     */
    private $eavConfig;

    /**
     * @var ProductResource
     */
    private $product;

    /**
     * @var ProductItemResource
     */
    private $productItem;

    /**
     * @param ResourceConnection $resource
     * @param Session $session
     * @param ScopeResolverInterface $scopeResolver
     * @param ScopeConfigInterface $scopeConfig
     * @param EavConfig $eavConfig
     * @param ProductResource $product
     * @param ProductItemResource $productItem
     */
    public function __construct(
        ResourceConnection $resource,
        Session $session,
        ScopeResolverInterface $scopeResolver,
        ScopeConfigInterface $scopeConfig,
        EavConfig $eavConfig,
        ProductResource $product,
        ProductItemResource $productItem
    ) {
        $this->resource = $resource;
        $this->connection = $resource->getConnection();
        $this->session = $session;
        $this->scopeResolver = $scopeResolver;
        $this->scopeConfig = $scopeConfig;
        $this->eavConfig = $eavConfig;
        $this->product = $product;
        $this->productItem = $productItem;
    }

    /**
     * Gets the aggregate data for the specified bucket.
     *
     * @param BucketInterface $bucket
     * @param array $dimensions
     * @param array $documentIds
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Db_Statement_Exception
     */
    public function getAggregation(
        BucketInterface $bucket,
        array $dimensions,
        array $documentIds
    ) {
        $result = [];
        $select = $this->getSelect($bucket, $dimensions, $documentIds);
        $query  = $this->connection->query($select);

        while ($row = $query->fetch()) {
            if ($row['count'] !== (int) 0) {
                $result[$row['value']] = [
                    'value' => (int) $row['value'],
                    'count' => (int) $row['count']
                ];
            }
        }

        return $result;
    }

    /**
     * Gets the select for the aggregation query.
     *
     * @param BucketInterface $bucket
     * @param array $dimensions
     * @param array $documentIds
     * @return Select
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getSelect(BucketInterface $bucket, array $dimensions, array $documentIds)
    {
        $attribute = $this->eavConfig->getAttribute(Product::ENTITY, $bucket->getField());
        $currentScope = $this->scopeResolver->getScope($dimensions['scope']->getValue());
        $customerGroupId = $this->session->getCustomerGroupId();

        $eavIndexTable = $this->resource->getTableName(
            'catalog_product_index_eav' . ($attribute->getBackendType() === 'decimal' ? '_decimal' : '')
        );

        $subSelect = $this->connection->select()
        ->from(
            ['eav' => $eavIndexTable],
            ['eav.entity_id', 'eav.value']
        )->joinInner(
            ['source_entity' => $this->product->getEntityTable()],
            'eav.source_id = source_entity.entity_id',
            ['sku']
        )->joinInner(
            ['shared_catalog_item' => $this->productItem->getMainTable()],
            'source_entity.sku  = shared_catalog_item.sku',
            []
        )
        ->where('eav.entity_id IN (?)', $documentIds)
        ->where('eav.attribute_id = ?', $attribute->getId())
        ->where('eav.store_id = ? ', $currentScope->getId())
        ->where('source_entity.type_id <> ?', 'configurable')
        ->where('shared_catalog_item.customer_group_id = ?', $customerGroupId);

        $this->addStockFilterToSelect($subSelect);

        $outerSelect = $this->resource->getConnection()->select()->from(
            ['sub' => $subSelect],
            [
                'value' => 'sub.value',
                'count' => 'COUNT(sub.value)'
            ]
        )->group('sub.value');

        return $outerSelect;
    }

    /**
     * Filters the select query by product stock status if configured.
     *
     * @param Select $select
     * @return Select
     */
    private function addStockFilterToSelect(Select $select)
    {
        $showOutOfStock = $this->scopeConfig->isSetFlag(
            Configuration::XML_PATH_SHOW_OUT_OF_STOCK,
            ScopeInterface::SCOPE_STORE
        );

        if (!$showOutOfStock) {
            $select->joinInner(
                ['stock_index' => $this->resource->getTableName('cataloginventory_stock_status')],
                'eav.source_id = stock_index.product_id',
                []
            )->where('stock_index.stock_status = ?', Stock::STOCK_IN_STOCK);
        }

        return $select;
    }
}
