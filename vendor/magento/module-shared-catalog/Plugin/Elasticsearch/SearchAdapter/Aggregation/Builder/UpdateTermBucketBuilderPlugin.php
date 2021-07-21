<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SharedCatalog\Plugin\Elasticsearch\SearchAdapter\Aggregation\Builder;

use Magento\Elasticsearch\SearchAdapter\Aggregation\Builder\Term;
use Magento\Framework\Search\Request\BucketInterface as RequestBucketInterface;
use Magento\SharedCatalog\Api\StatusInfoInterface;
use Magento\SharedCatalog\Model\SearchAdapter\Aggregation\Builder\DataProvider;
use Magento\Store\Model\ScopeInterface;

/**
 * Plugin for SharedCatalog aggregation builder when using Elasticsearch.
 */
class UpdateTermBucketBuilderPlugin
{
    /**
     * @var StatusInfoInterface
     */
    private $statusInfo;

    /**
     * @var DataProvider
     */
    private $dataProvider;

    /**
     * @param StatusInfoInterface $statusInfo
     * @param DataProvider $dataProvider
     */
    public function __construct(
        StatusInfoInterface $statusInfo,
        DataProvider $dataProvider
    ) {
        $this->statusInfo = $statusInfo;
        $this->dataProvider = $dataProvider;
    }

    /**
     * Update SharedCatalog aggregates for Term bucket types when using Elasticsearch.
     *
     * @param Term $subject
     * @param array $values
     * @param RequestBucketInterface $bucket
     * @param array $dimensions
     * @param array $queryResult
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Zend_Db_Statement_Exception
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterBuild(
        Term $subject,
        array $values,
        RequestBucketInterface $bucket,
        array $dimensions,
        array $queryResult
    ) {
        $sharedCatalogIsEnabled = $this->statusInfo->isActive(ScopeInterface::SCOPE_STORE, null);
        $shouldAggregate = ($bucket->getField() !== 'category_ids');

        if ($sharedCatalogIsEnabled && $shouldAggregate) {
            $documentIds = array_column($queryResult['hits']['hits'], '_id');
            $values = $this->dataProvider->getAggregation($bucket, $dimensions, $documentIds);
        }

        return $values;
    }
}
