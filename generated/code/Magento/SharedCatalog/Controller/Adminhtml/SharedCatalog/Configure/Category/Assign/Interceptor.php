<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Category\Assign;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Category\Assign
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Category\Assign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\SharedCatalog\Model\Form\Storage\WizardFactory $wizardStorageFactory, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\SharedCatalog\Model\SharedCatalogAssignment $sharedCatalogAssignment)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $wizardStorageFactory, $categoryRepository, $sharedCatalogAssignment);
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
