<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Tree\Pricing\Get;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Tree\Pricing\Get
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Tree\Pricing\Get implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\SharedCatalog\Model\Configure\Category\Tree $categoryTree, \Magento\SharedCatalog\Model\Configure\Category\Tree\RendererInterface $treeRenderer, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\SharedCatalog\Model\Form\Storage\WizardFactory $wizardStorageFactory)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $categoryTree, $treeRenderer, $storeManager, $wizardStorageFactory);
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
