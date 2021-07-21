<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
 */
interface CartItemExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts();

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts);

    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface|null
     */
    public function getNegotiableQuoteItem();

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface $negotiableQuoteItem
     * @return $this
     */
    public function setNegotiableQuoteItem(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface $negotiableQuoteItem);
}
