<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\PurchaseOrder\Model\Plugin;

use Magento\Checkout\Api\Data\ShippingInformationInterface;
use Magento\Checkout\Api\ShippingInformationManagementInterface;

/**
 * Process custom customer attributes before saving shipping address
 */
class ProcessCustomCustomerAttributes
{
    /**
     * Process shipping custom attribute before save
     *
     * @param ShippingInformationManagementInterface $subject
     * @param int $cartId
     * @param ShippingInformationInterface $addressInformation
     *
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeSaveAddressInformation(
        ShippingInformationManagementInterface $subject,
        $cartId,
        ShippingInformationInterface $addressInformation
    ): void {
        $shippingAddress = $addressInformation->getShippingAddress();
        $customerCustomAttributes = $shippingAddress->getCustomAttributes();
        if ($customerCustomAttributes) {
            foreach ($customerCustomAttributes as $customAttribute) {
                $customAttributeValue = $customAttribute->getValue();
                if ($customAttributeValue && is_array($customAttributeValue)) {
                    if (!empty($customAttributeValue['value'])) {
                        $customAttribute->setValue($customAttributeValue['value']);
                    }
                }
            }
        }
    }
}
