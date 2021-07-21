<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartItemInterface
 */
class CartItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartItemExtensionInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts()
    {
        return $this->_get('discounts');
    }

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->setData('discounts', $discounts);
        return $this;
    }

    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface|null
     */
    public function getNegotiableQuoteItem()
    {
        return $this->_get('negotiable_quote_item');
    }

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface $negotiableQuoteItem
     * @return $this
     */
    public function setNegotiableQuoteItem(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface $negotiableQuoteItem)
    {
        $this->setData('negotiable_quote_item', $negotiableQuoteItem);
        return $this;
    }
}
