<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\ConfigureProductToAdd;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\ConfigureProductToAdd
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\ConfigureProductToAdd implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\DataObject $dataObject, \Magento\Framework\Session\SessionManagerInterface $sessionQuote, \Magento\Catalog\Helper\Product\Composite $compositeHelper, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $quoteManagement, array $productTypesToReplace = [])
    {
        $this->___init();
        parent::__construct($context, $dataObject, $sessionQuote, $compositeHelper, $quoteManagement, $productTypesToReplace);
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
