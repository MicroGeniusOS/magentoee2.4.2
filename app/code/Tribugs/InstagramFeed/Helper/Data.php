<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);
namespace Tribugs\InstagramFeed\Helper;

use Mageplaza\Core\Helper\AbstractData;

/**
 * Class Data
 * @package Tribugs\InstagramFeed\Helper
 */
class Data extends AbstractData
{
    /**
     * @type string
     */
    const CONFIG_MODULE_PATH = 'mpinstagramfeed';

    /**
     * @param null $storeId
     *
     * @return mixed
     */
    public function getAccessToken($storeId = null)
    {
        return $this->getConfigGeneral('access_token', $storeId);
    }

    /**
     * @param null $storeId
     *
     * @return mixed
     */
    public function getDisplayConfig($storeId = null)
    {
        return $this->getModuleConfig('display', $storeId);
    }
}
