<?php
namespace Magento\Banner\Controller\Ajax\Load;

/**
 * Interceptor class for @see \Magento\Banner\Controller\Ajax\Load
 */
class Interceptor extends \Magento\Banner\Controller\Ajax\Load implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\Controller\Result\RawFactory $rawFactory, \Magento\Banner\Model\Banner\DataFactory $dataFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $rawFactory, $dataFactory);
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
