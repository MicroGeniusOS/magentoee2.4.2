<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CustomerCustomAttributes\Model;

use Magento\Quote\Api\Data\AddressInterface;

/**
 * Helper class for processing shipping or billing custom attributes
 */
class CustomerAddressCustomAttributesProcessor
{
    /**
     * Process customer custom attribute before save shipping or billing address
     *
     * @param AddressInterface $addressInformation
     * @return void
     */
    public function execute(
        AddressInterface $addressInformation
    ): void {
        $customerCustomAttributes = $addressInformation->getCustomAttributes();
        if ($customerCustomAttributes) {
            foreach ($customerCustomAttributes as $customAttribute) {
                $customAttributeValue = $customAttribute->getValue();
                if ($customAttributeValue && is_array($customAttributeValue)) {
                    if ($customAttributeValue['value'] !== null) {
                        $customAttribute->setValue($customAttributeValue['value']);
                    }
                }
            }
        }
    }
}
