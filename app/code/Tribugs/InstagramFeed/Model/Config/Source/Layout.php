<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Tribugs\InstagramFeed\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Layout
 * @package Tribugs\InstagramFeed\Model\Config\Source
 */
class Layout implements ArrayInterface
{
    const SINGLE = 'single';
    const MULTIPLE = 'multiple';
    const OPTIMIZED = 'optimized';

    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::SINGLE,
                'label' => __('Single Row')
            ],
            [
                'value' => self::MULTIPLE,
                'label' => __('Multiple Rows')
            ],
            [
                'value' => self::OPTIMIZED,
                'label' => __('Optimized image')
            ]
        ];

        return $options;
    }
}
