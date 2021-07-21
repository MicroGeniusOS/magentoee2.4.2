<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\UpdateOnOpen;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\UpdateOnOpen
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\UpdateOnOpen implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\NegotiableQuote\Model\QuoteUpdater $quoteUpdater, \Magento\AdvancedCheckout\Model\CartFactory $cartFactory, \Magento\NegotiableQuote\Model\QuoteUpdatesInfo $quoteUpdatesInfo, \Magento\NegotiableQuote\Model\Quote\Currency $quoteCurrency, \Magento\NegotiableQuote\Helper\Quote $quoteHelper)
    {
        $this->___init();
        parent::__construct($context, $logger, $quoteRepository, $negotiableQuoteManagement, $quoteUpdater, $cartFactory, $quoteUpdatesInfo, $quoteCurrency, $quoteHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
