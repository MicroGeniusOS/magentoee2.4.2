<?php
namespace Dotdigitalgroup\B2b\Controller\Adminhtml\Run\NegotiableQuoteReset;

/**
 * Interceptor class for @see \Dotdigitalgroup\B2b\Controller\Adminhtml\Run\NegotiableQuoteReset
 */
class Interceptor extends \Dotdigitalgroup\B2b\Controller\Adminhtml\Run\NegotiableQuoteReset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\B2b\Api\NegotiableQuoteRepositoryInterface $negotiableQuote, \Magento\Backend\App\Action\Context $context, \Dotdigitalgroup\Email\Helper\Data $data)
    {
        $this->___init();
        parent::__construct($negotiableQuote, $context, $data);
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
