<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\PurchaseOrderRule\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface RuleSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get rule list
     *
     * @return RuleInterface[]
     */
    public function getItems();

    /**
     * Set rule list
     *
     * @param RuleInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
