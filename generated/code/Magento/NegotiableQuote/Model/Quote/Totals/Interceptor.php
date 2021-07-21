<?php
namespace Magento\NegotiableQuote\Model\Quote\Totals;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\Quote\Totals
 */
class Interceptor extends \Magento\NegotiableQuote\Model\Quote\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Tax\Model\Config $taxConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Api\Data\CartInterface $quote, \Magento\NegotiableQuote\Model\NegotiableQuoteItemFactory $negotiableQuoteItemFactory, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory)
    {
        $this->___init();
        parent::__construct($taxConfig, $storeManager, $quoteRepository, $quote, $negotiableQuoteItemFactory, $extensionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogTotalPriceWithoutTax($useQuoteCurrency = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCatalogTotalPriceWithoutTax');
        return $pluginInfo ? $this->___callPlugins('getCatalogTotalPriceWithoutTax', func_get_args(), $pluginInfo) : parent::getCatalogTotalPriceWithoutTax($useQuoteCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogTotalPriceWithTax($useQuoteCurrency = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCatalogTotalPriceWithTax');
        return $pluginInfo ? $this->___callPlugins('getCatalogTotalPriceWithTax', func_get_args(), $pluginInfo) : parent::getCatalogTotalPriceWithTax($useQuoteCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalTaxValue($useQuoteCurrency = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOriginalTaxValue');
        return $pluginInfo ? $this->___callPlugins('getOriginalTaxValue', func_get_args(), $pluginInfo) : parent::getOriginalTaxValue($useQuoteCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubtotal($useQuoteCurrency = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubtotal');
        return $pluginInfo ? $this->___callPlugins('getSubtotal', func_get_args(), $pluginInfo) : parent::getSubtotal($useQuoteCurrency);
    }
}
