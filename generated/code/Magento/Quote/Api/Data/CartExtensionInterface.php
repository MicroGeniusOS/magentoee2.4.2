<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
 */
interface CartExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface|null
     */
    public function getNegotiableQuote();

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface $negotiableQuote
     * @return $this
     */
    public function setNegotiableQuote(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface $negotiableQuote);

    /**
     * @return \Amazon\Payment\Api\Data\QuoteLinkInterface|null
     */
    public function getAmazonOrderReferenceId();

    /**
     * @param \Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId);
}
