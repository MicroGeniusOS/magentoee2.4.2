<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\View;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\View
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\NegotiableQuote\Model\Discount\StateChanges\Provider $messageProvider, \Magento\NegotiableQuote\Model\Cart $cart, \Magento\NegotiableQuote\Helper\Quote $negotiableQuoteHelper)
    {
        $this->___init();
        parent::__construct($context, $logger, $quoteRepository, $negotiableQuoteManagement, $messageProvider, $cart, $negotiableQuoteHelper);
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
