<?php
namespace Magento\Rma\Controller\Adminhtml\Rma\Item\Attribute\Save;

/**
 * Interceptor class for @see \Magento\Rma\Controller\Adminhtml\Rma\Item\Attribute\Save
 */
class Interceptor extends \Magento\Rma\Controller\Adminhtml\Rma\Item\Attribute\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Store\Model\WebsiteFactory $websiteFactory, ?\Magento\Framework\Serialize\Serializer\FormData $formDataSerializer = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $websiteFactory, $formDataSerializer);
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
