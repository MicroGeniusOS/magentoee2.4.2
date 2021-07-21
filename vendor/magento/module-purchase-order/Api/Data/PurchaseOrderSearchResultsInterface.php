<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\PurchaseOrder\Api\Data;

/**
 * Interface PurchaseOrderSearchResultsInterface
 */
interface PurchaseOrderSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get items.
     *
     * @return \Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface[] Array of collection items.
     */
    public function getItems();

    /**
     * Set items.
     *
     * @param \Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);
}
