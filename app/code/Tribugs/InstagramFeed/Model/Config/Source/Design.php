<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Tribugs\InstagramFeed\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Design
 * @package Tribugs\InstagramFeed\Model\Config\Source
 */
class Design implements ArrayInterface
{
    const CONFIG = 0;
    const CUSTOM = 1;

    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::CONFIG,
                'label' => __('Use Config')
            ],
            [
                'value' => self::CUSTOM,
                'label' => __('Custom')
            ]
        ];

        return $options;
    }
}
