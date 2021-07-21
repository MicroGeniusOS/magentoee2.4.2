<?php
namespace Magento\QuickOrder\Controller\Ajax\Product\Suggest;

/**
 * Interceptor class for @see \Magento\QuickOrder\Controller\Ajax\Product\Suggest
 */
class Interceptor extends \Magento\QuickOrder\Controller\Ajax\Product\Suggest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\QuickOrder\Model\Config $moduleConfig, \Magento\QuickOrder\Model\Product\Suggest\DataProvider $suggestDataProvider)
    {
        $this->___init();
        parent::__construct($context, $moduleConfig, $suggestDataProvider);
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
