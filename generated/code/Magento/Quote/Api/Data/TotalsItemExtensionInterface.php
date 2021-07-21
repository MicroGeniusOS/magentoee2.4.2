<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
 */
interface TotalsItemExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface|null
     */
    public function getNegotiableQuoteItemTotals();

    /**
     * @param \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals
     * @return $this
     */
    public function setNegotiableQuoteItemTotals(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals);
}
