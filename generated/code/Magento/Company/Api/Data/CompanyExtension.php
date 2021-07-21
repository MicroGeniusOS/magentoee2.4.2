<?php
namespace Magento\Company\Api\Data;

/**
 * Extension class for @see \Magento\Company\Api\Data\CompanyInterface
 */
class CompanyExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CompanyExtensionInterface
{
    /**
     * @return int|null
     */
    public function getApplicablePaymentMethod()
    {
        return $this->_get('applicable_payment_method');
    }

    /**
     * @param int $applicablePaymentMethod
     * @return $this
     */
    public function setApplicablePaymentMethod($applicablePaymentMethod)
    {
        $this->setData('applicable_payment_method', $applicablePaymentMethod);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvailablePaymentMethods()
    {
        return $this->_get('available_payment_methods');
    }

    /**
     * @param string $availablePaymentMethods
     * @return $this
     */
    public function setAvailablePaymentMethods($availablePaymentMethods)
    {
        $this->setData('available_payment_methods', $availablePaymentMethods);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUseConfigSettings()
    {
        return $this->_get('use_config_settings');
    }

    /**
     * @param int $useConfigSettings
     * @return $this
     */
    public function setUseConfigSettings($useConfigSettings)
    {
        $this->setData('use_config_settings', $useConfigSettings);
        return $this;
    }

    /**
     * @return \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface|null
     */
    public function getQuoteConfig()
    {
        return $this->_get('quote_config');
    }

    /**
     * @param \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface $quoteConfig
     * @return $this
     */
    public function setQuoteConfig(\Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface $quoteConfig)
    {
        $this->setData('quote_config', $quoteConfig);
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsPurchaseOrderEnabled()
    {
        return $this->_get('is_purchase_order_enabled');
    }

    /**
     * @param boolean $isPurchaseOrderEnabled
     * @return $this
     */
    public function setIsPurchaseOrderEnabled($isPurchaseOrderEnabled)
    {
        $this->setData('is_purchase_order_enabled', $isPurchaseOrderEnabled);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getApplicableShippingMethod()
    {
        return $this->_get('applicable_shipping_method');
    }

    /**
     * @param int $applicableShippingMethod
     * @return $this
     */
    public function setApplicableShippingMethod($applicableShippingMethod)
    {
        $this->setData('applicable_shipping_method', $applicableShippingMethod);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvailableShippingMethods()
    {
        return $this->_get('available_shipping_methods');
    }

    /**
     * @param string $availableShippingMethods
     * @return $this
     */
    public function setAvailableShippingMethods($availableShippingMethods)
    {
        $this->setData('available_shipping_methods', $availableShippingMethods);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUseConfigSettingsShipping()
    {
        return $this->_get('use_config_settings_shipping');
    }

    /**
     * @param int $useConfigSettingsShipping
     * @return $this
     */
    public function setUseConfigSettingsShipping($useConfigSettingsShipping)
    {
        $this->setData('use_config_settings_shipping', $useConfigSettingsShipping);
        return $this;
    }
}
