<?php
namespace Magento\NegotiableQuote\Controller\Quote\Download;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Quote\Download
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Quote\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\NegotiableQuote\Model\Attachment\DownloadProviderFactory $downloadProviderFactory, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($context, $downloadProviderFactory, $logger, $customerSession);
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
