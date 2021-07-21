<?php
namespace Magento\QuickOrder\Controller\Sku\UploadFile;

/**
 * Interceptor class for @see \Magento\QuickOrder\Controller\Sku\UploadFile
 */
class Interceptor extends \Magento\QuickOrder\Controller\Sku\UploadFile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\QuickOrder\Model\Config $moduleConfig, \Magento\AdvancedCheckout\Helper\Data $advancedCheckoutHelper)
    {
        $this->___init();
        parent::__construct($context, $moduleConfig, $advancedCheckoutHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
