<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyShipping\Model\Source;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Model class that provides a list of available shipping methods.
 */
class ShippingMethod implements OptionSourceInterface
{
    /**
     * Scope config.
     *
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Returns shipping methods source data
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];

        $carriers = $this->scopeConfig->getValue('carriers');

        foreach ($carriers as $carrierCode => $carrier) {
            $shippingTitle = $carrier['title'];

            if (!$carrier['active']) {
                $shippingTitle .= __(' (disabled)');
            }

            $options[] = ['value' => $carrierCode, 'label' => $shippingTitle];
        }

        return $options;
    }
}
