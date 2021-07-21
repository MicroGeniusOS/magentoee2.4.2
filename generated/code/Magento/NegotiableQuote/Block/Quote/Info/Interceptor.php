<?php
namespace Magento\NegotiableQuote\Block\Quote\Info;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Block\Quote\Info
 */
class Interceptor extends \Magento\NegotiableQuote\Block\Quote\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\NegotiableQuote\Helper\Quote $negotiableQuoteHelper, \Magento\NegotiableQuote\Model\Status\LabelProviderInterface $labelProvider, \Magento\NegotiableQuote\Model\Expiration $expiration, \Magento\Company\Api\AuthorizationInterface $authorization, \Magento\NegotiableQuote\Model\Company\DetailsProviderFactory $companyDetailsProviderFactory, \Magento\NegotiableQuote\Model\Customer\AddressProviderFactory $addressProviderFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $negotiableQuoteHelper, $labelProvider, $expiration, $authorization, $companyDetailsProviderFactory, $addressProviderFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteStatusLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteStatusLabel');
        return $pluginInfo ? $this->___callPlugins('getQuoteStatusLabel', func_get_args(), $pluginInfo) : parent::getQuoteStatusLabel();
    }
}
