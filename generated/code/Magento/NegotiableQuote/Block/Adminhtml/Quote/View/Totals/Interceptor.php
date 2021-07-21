<?php
namespace Magento\NegotiableQuote\Block\Adminhtml\Quote\View\Totals;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Block\Adminhtml\Quote\View\Totals
 */
class Interceptor extends \Magento\NegotiableQuote\Block\Adminhtml\Quote\View\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\NegotiableQuote\Helper\Quote $negotiableQuoteHelper, \Magento\NegotiableQuote\Model\Restriction\RestrictionInterface $restriction, \Magento\Tax\Model\Config $taxConfig, \Magento\NegotiableQuote\Model\Quote\TotalsFactory $quoteTotalsFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $negotiableQuoteHelper, $restriction, $taxConfig, $quoteTotalsFactory, $priceCurrency, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotals');
        return $pluginInfo ? $this->___callPlugins('getTotals', func_get_args(), $pluginInfo) : parent::getTotals();
    }
}
