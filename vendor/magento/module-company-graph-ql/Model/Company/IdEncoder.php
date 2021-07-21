<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CompanyGraphQl\Model\Company;

use Magento\Framework\GraphQl\Exception\GraphQlInputException;

/**
 * Encode and decode id values
 */
class IdEncoder
{
    /**
     * Decode ID value
     *
     * @param string $id
     * @return false|string
     * @phpcs:disable Magento2.Functions.DiscouragedFunction
     * @throws GraphQlInputException
     */
    public function decode(string $id)
    {
        if ($this->isValidBase64($id)) {
            return base64_decode($id, true);
        }
        throw new GraphQlInputException(__('Value "%1" is incorrect.', $id));
    }

    /**
     * Encode ID value
     *
     * @param string $id
     * @return string
     * @phpcs:disable Magento2.Functions.DiscouragedFunction
     */
    public function encode(string $id): string
    {
        return base64_encode($id);
    }

    /**
     * Validate base64 encoded value
     *
     * @param string $data
     * @return bool
     */
    public function isValidBase64(string $data): bool
    {
        $decodedValue = base64_decode($data, true);
        if ($decodedValue === false) {
            return false;
        }

        return base64_encode($decodedValue) === $data;
    }
}
