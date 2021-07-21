<?php
namespace Magento\QuickOrder\Controller\Ajax\Delete;

/**
 * Interceptor class for @see \Magento\QuickOrder\Controller\Ajax\Delete
 */
class Interceptor extends \Magento\QuickOrder\Controller\Ajax\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\QuickOrder\Model\Config $moduleConfig, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\AdvancedCheckout\Model\Cart $cart)
    {
        $this->___init();
        parent::__construct($context, $moduleConfig, $resultJsonFactory, $cart);
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
