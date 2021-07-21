<?php
namespace Magento\Company\Controller\Accessdenied\Index;

/**
 * Interceptor class for @see \Magento\Company\Controller\Accessdenied\Index
 */
class Interceptor extends \Magento\Company\Controller\Accessdenied\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Cms\Helper\Page $pageHelper, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Company\Api\StatusServiceInterface $moduleConfig)
    {
        $this->___init();
        parent::__construct($context, $pageHelper, $resultForwardFactory, $moduleConfig);
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
