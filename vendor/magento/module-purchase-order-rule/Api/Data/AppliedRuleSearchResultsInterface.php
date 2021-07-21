<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\PurchaseOrderRule\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface AppliedRuleSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get applied rule list
     *
     * @return AppliedRuleInterface[]
     */
    public function getItems();

    /**
     * Set applied rule list
     *
     * @param AppliedRuleInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
