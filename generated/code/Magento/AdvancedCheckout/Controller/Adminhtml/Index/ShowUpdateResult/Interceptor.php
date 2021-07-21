<?php
namespace Magento\AdvancedCheckout\Controller\Adminhtml\Index\ShowUpdateResult;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Controller\Adminhtml\Index\ShowUpdateResult
 */
class Interceptor extends \Magento\AdvancedCheckout\Controller\Adminhtml\Index\ShowUpdateResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper)
    {
        $this->___init();
        parent::__construct($context, $registry, $customerFactory, $dataObjectHelper);
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
