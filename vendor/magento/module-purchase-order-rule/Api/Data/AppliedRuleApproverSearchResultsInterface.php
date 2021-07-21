<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\PurchaseOrderRule\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface AppliedRuleApproverSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get rule list
     *
     * @return AppliedRuleApproverInterface[]
     */
    public function getItems();

    /**
     * Set rule list
     *
     * @param AppliedRuleApproverInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
