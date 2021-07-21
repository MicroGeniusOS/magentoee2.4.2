<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartInterface
 */
class CartExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartExtensionInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface|null
     */
    public function getNegotiableQuote()
    {
        return $this->_get('negotiable_quote');
    }

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface $negotiableQuote
     * @return $this
     */
    public function setNegotiableQuote(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface $negotiableQuote)
    {
        $this->setData('negotiable_quote', $negotiableQuote);
        return $this;
    }

    /**
     * @return \Amazon\Payment\Api\Data\QuoteLinkInterface|null
     */
    public function getAmazonOrderReferenceId()
    {
        return $this->_get('amazon_order_reference_id');
    }

    /**
     * @param \Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId)
    {
        $this->setData('amazon_order_reference_id', $amazonOrderReferenceId);
        return $this;
    }
}
