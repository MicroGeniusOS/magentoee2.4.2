<?php
namespace Magento\Company\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
 */
interface CompanyExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return int|null
     */
    public function getApplicablePaymentMethod();

    /**
     * @param int $applicablePaymentMethod
     * @return $this
     */
    public function setApplicablePaymentMethod($applicablePaymentMethod);

    /**
     * @return string|null
     */
    public function getAvailablePaymentMethods();

    /**
     * @param string $availablePaymentMethods
     * @return $this
     */
    public function setAvailablePaymentMethods($availablePaymentMethods);

    /**
     * @return int|null
     */
    public function getUseConfigSettings();

    /**
     * @param int $useConfigSettings
     * @return $this
     */
    public function setUseConfigSettings($useConfigSettings);

    /**
     * @return \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface|null
     */
    public function getQuoteConfig();

    /**
     * @param \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface $quoteConfig
     * @return $this
     */
    public function setQuoteConfig(\Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface $quoteConfig);

    /**
     * @return boolean|null
     */
    public function getIsPurchaseOrderEnabled();

    /**
     * @param boolean $isPurchaseOrderEnabled
     * @return $this
     */
    public function setIsPurchaseOrderEnabled($isPurchaseOrderEnabled);

    /**
     * @return int|null
     */
    public function getApplicableShippingMethod();

    /**
     * @param int $applicableShippingMethod
     * @return $this
     */
    public function setApplicableShippingMethod($applicableShippingMethod);

    /**
     * @return string|null
     */
    public function getAvailableShippingMethods();

    /**
     * @param string $availableShippingMethods
     * @return $this
     */
    public function setAvailableShippingMethods($availableShippingMethods);

    /**
     * @return int|null
     */
    public function getUseConfigSettingsShipping();

    /**
     * @param int $useConfigSettingsShipping
     * @return $this
     */
    public function setUseConfigSettingsShipping($useConfigSettingsShipping);
}
