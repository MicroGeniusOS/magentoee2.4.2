<?php
namespace Magento\NegotiableQuote\Model\QuoteUpdatesInfo;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\QuoteUpdatesInfo
 */
class Interceptor extends \Magento\NegotiableQuote\Model\QuoteUpdatesInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\NegotiableQuote\Model\Quote\TotalsFactory $quoteTotalsFactory, \Magento\NegotiableQuote\Helper\Quote $quoteHelper, \Magento\NegotiableQuote\Api\NegotiableQuoteItemManagementInterface $negotiableQuoteItemManagement, \Magento\Framework\Filter\StripTags $tagFilter, \Magento\Framework\UrlInterface $url, \Magento\NegotiableQuote\Model\QuoteUpdatesInfo\ProductOptions $productOptions, \Magento\NegotiableQuote\Model\Status\LabelProviderInterface $labelProvider, \Magento\NegotiableQuote\Model\Discount\StateChanges\Provider $messageProvider)
    {
        $this->___init();
        parent::__construct($priceCurrency, $quoteTotalsFactory, $quoteHelper, $negotiableQuoteItemManagement, $tagFilter, $url, $productOptions, $labelProvider, $messageProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteUpdatedData(\Magento\Quote\Api\Data\CartInterface $quote, array $quoteData = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteUpdatedData');
        return $pluginInfo ? $this->___callPlugins('getQuoteUpdatedData', func_get_args(), $pluginInfo) : parent::getQuoteUpdatedData($quote, $quoteData);
    }
}
