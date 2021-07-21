<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CustomerCustomAttributes\Model\Customer\Attribute\File\Download;

use Magento\Customer\Model\Metadata\CustomerMetadata;

/**
 * Class Validator validates if user can have access to requested file
 */
class Validator
{
    /**
     * @var CustomerMetadata
     */
    private $customerMetaData;

    /**
     * Validator constructor.
     *
     * @param CustomerMetadata $customerMetaData
     */
    public function __construct(
        CustomerMetadata $customerMetaData
    ) {
        $this->customerMetaData = $customerMetaData;
    }

    /**
     * Check if customer can download file
     *
     * @param string $fileName
     * @param array $customAttributes
     * @return bool
     */
    public function canDownloadFile(string $fileName, array $customAttributes) : bool
    {
        $attributesMetaData = $this->customerMetaData->getCustomAttributesMetadata();
        $fileName = DIRECTORY_SEPARATOR . $fileName;
        foreach ($attributesMetaData as $attributeMetaData) {
            foreach ($customAttributes as $attribute) {
                if ($attributeMetaData->getAttributeCode() === $attribute->getAttributeCode()
                    && $attributeMetaData->getFrontendInput() === 'file'
                    && $fileName === $attribute->getValue()
                ) {
                    return true;
                }
            }
        }

        return false;
    }
}
