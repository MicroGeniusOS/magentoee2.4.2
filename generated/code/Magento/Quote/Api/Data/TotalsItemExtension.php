<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\TotalsItemInterface
 */
class TotalsItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements TotalsItemExtensionInterface
{
    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface|null
     */
    public function getNegotiableQuoteItemTotals()
    {
        return $this->_get('negotiable_quote_item_totals');
    }

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals
     * @return $this
     */
    public function setNegotiableQuoteItemTotals(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals)
    {
        $this->setData('negotiable_quote_item_totals', $negotiableQuoteItemTotals);
        return $this;
    }
}
