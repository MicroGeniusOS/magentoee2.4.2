<?php
namespace Magento\Rma\Controller\Tracking\PackagePrint;

/**
 * Interceptor class for @see \Magento\Rma\Controller\Tracking\PackagePrint
 */
class Interceptor extends \Magento\Rma\Controller\Tracking\PackagePrint implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileResponseFactory, \Magento\Rma\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileResponseFactory, $helper);
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
