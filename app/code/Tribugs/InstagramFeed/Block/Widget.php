<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);
namespace Tribugs\InstagramFeed\Block;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Tribugs\InstagramFeed\Helper\Data;
use Tribugs\InstagramFeed\Model\Config\Source\Design;
use Tribugs\InstagramFeed\Model\Config\Source\Layout;

/**
 * Class Widget
 * @package Tribugs\InstagramFeed\Block
 */
class Widget extends Template implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'Tribugs_InstagramFeed::instagram.phtml';

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * Widget constructor.
     *
     * @param Template\Context $context
     * @param Data $helperData
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;

        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->helperData->isEnabled();
    }

    /**
     * Retrieve all options for Instagram feed
     *
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getAllOptions()
    {
        $option = (int)$this->getData('design');
        if ($option === Design::CONFIG) {
            $this->setData(array_merge($this->helperData->getDisplayConfig($this->getStoreId()), $this->getData()));
        }

        return $this->getData();
    }

    /**
     * @param string $layoutOpt
     *
     * @return int|mixed|null
     */
    public function getNumberRow($layoutOpt)
    {
        switch ($layoutOpt) {
            case Layout::MULTIPLE:
                $number_row = !empty($this->getData('number_row')) ? $this->getData('number_row') : 2;
                break;
            case Layout::SINGLE:
                $number_row = 1;
                break;
            default:
                $number_row = null;
        }

        return $number_row;
    }

    /**
     * @return float|int
     */
    public function calcWidth()
    {
        $type = $this->getData('layout');
        $total = $this->getData('total_number');
        $number_row = $this->getNumberRow($type);
        if (!empty($number_row)) {
            return (100 / round($total / $number_row));
        }

        return 300;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->helperData->getConfigGeneral('access_token');
    }

    /**
     * @return int
     * @throws NoSuchEntityException
     */
    public function getStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }
}
