<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\QuickOrder\Plugin\AdvancedCheckout;

use Laminas\I18n\Validator\IsFloat;
use Magento\AdvancedCheckout\Helper\Data;
use Magento\AdvancedCheckout\Model\Cart;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Helper\Image;
use Magento\Framework\Locale\FormatInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\QuickOrder\Model\CatalogPermissions\Permissions;
use Magento\QuickOrder\Model\Config;

/**
 * Plugin class for add extra data to items in QuickOrder.
 * @see \Magento\Checkout\Model\Cart\CartInterface
 */
class AddExtraDataToCartItemForQuickOrderPlugin
{
    /**
     * @var PriceCurrencyInterface|null
     */
    private $priceCurrency;

    /**
     * @var Image
     */
    private $imageHelper;

    /**
     * @var FormatInterface
     */
    private $localeFormat;

    /**
     * @var Config
     */
    private $quickOrderConfig;

    /**
     * @var Permissions
     */
    private $permissions;

    /**
     * @var IsFloat
     */
    private $float;

    /**
     * @param PriceCurrencyInterface $priceCurrency
     * @param Image $imageHelper
     * @param FormatInterface $localeFormat
     * @param Config $quickOrderConfig
     * @param IsFloat $float
     * @param Permissions $permissions
     */
    public function __construct(
        PriceCurrencyInterface $priceCurrency,
        Image $imageHelper,
        FormatInterface $localeFormat,
        Config $quickOrderConfig,
        IsFloat $float,
        Permissions $permissions
    ) {
        $this->priceCurrency = $priceCurrency;
        $this->imageHelper = $imageHelper;
        $this->localeFormat = $localeFormat;
        $this->quickOrderConfig = $quickOrderConfig;
        $this->float = $float;
        $this->permissions = $permissions;
    }

    /**
     * Update item qty and add extra data to chosen item
     *
     * @param Cart $subject
     * @param string $sku
     * @param string $qty
     * @param array $config
     * @return array
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function beforeCheckItem(
        Cart $subject,
        string $sku,
        string $qty,
        array $config = []
    ): array {
        if ($this->quickOrderConfig->isActive()) {
            $item = null;
            if (isset($config['__item'])) {
                $item = $config['__item'];
                $item['qty'] = !empty($item['qty'])
                    ? $item['qty']
                    : $qty;
            } else {
                $item = $this->getValidatedItem($sku, $qty);
            }
            if (null !== $item && isset($config['product']) && null !== $config['product']) {
                if (!$this->permissions->isProductPermissionsValid($config['product'])) {
                    $item['code'] = Data::ADD_ITEM_STATUS_FAILED_SKU;
                }
                $config['__item'] = $this->addExtraData($item, $config['product']);
            }
        }

        return [$sku, $qty, $config];
    }

    /**
     * Add extra data to product item.
     *
     * @param array $item
     * @param ProductInterface $product
     * @return array
     */
    private function addExtraData(array $item, ProductInterface $product): array
    {
        if (empty($item['qty'])) {
            $item['qty'] = null;
        }
        $item['name'] = $product->getName();
        $item['price'] = $this->retrieveProductPrice($product, $item['qty']);
        $item['thumbnail_url'] = $this->getProductThumbnailUrl($product);
        $item['url'] = $product->getProductUrl();

        return $item;
    }

    /**
     * Retrieve product price.
     *
     * @param ProductInterface $product
     * @param string|null $qty
     * @return string
     */
    private function retrieveProductPrice(ProductInterface $product, $qty): string
    {
        $store = $product->getStore();

        return $this->priceCurrency->convertAndFormat(
            $product->getFinalPrice($qty),
            false,
            PriceCurrencyInterface::DEFAULT_PRECISION,
            $store
        );
    }

    /**
     * Get product thumbnail url.
     *
     * @param ProductInterface $product
     * @return string
     */
    private function getProductThumbnailUrl(ProductInterface $product): string
    {
        return $this->imageHelper->init($product, 'product_thumbnail_image')->getUrl();
    }

    /**
     * Returns validated item
     *
     * @param string|array $sku
     * @param string|int|float $qty
     *
     * @return array
     */
    private function getValidatedItem($sku, $qty): array
    {
        $code = Data::ADD_ITEM_STATUS_SUCCESS;
        if ($sku === '') {
            $code = Data::ADD_ITEM_STATUS_FAILED_EMPTY;
        } else {
            if (!$this->float->isValid($qty)) {
                $code = Data::ADD_ITEM_STATUS_FAILED_QTY_INVALID_NUMBER;
            } else {
                $qty = $this->localeFormat->getNumber($qty);
                if ($qty <= 0) {
                    $code = Data::ADD_ITEM_STATUS_FAILED_QTY_INVALID_NON_POSITIVE;
                } elseif ($qty < 0.0001 || $qty > 99999999.9999) {
                    // same as app/design/frontend/enterprise/default/template/checkout/widget/sku.phtml
                    $code = Data::ADD_ITEM_STATUS_FAILED_QTY_INVALID_RANGE;
                }
            }
        }

        if ($code !== Data::ADD_ITEM_STATUS_SUCCESS) {
            $qty = '';
        }

        return ['sku' => $sku, 'qty' => $qty, 'code' => $code];
    }
}
