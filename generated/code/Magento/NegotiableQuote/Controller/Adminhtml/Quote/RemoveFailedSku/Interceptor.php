<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\RemoveFailedSku;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\RemoveFailedSku
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\RemoveFailedSku implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\NegotiableQuote\Model\Cart $cart)
    {
        $this->___init();
        parent::__construct($context, $logger, $jsonEncoder, $resultRawFactory, $cart);
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
