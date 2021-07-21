<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\DuplicatePost;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\DuplicatePost
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\DuplicatePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface $sharedCatalogRepository, \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\SharedCatalogWizardData $wizardData, \Magento\SharedCatalog\Model\SharedCatalogBuilder $sharedCatalogBuilder, \Magento\SharedCatalog\Model\Duplicator $duplicateManager)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $sharedCatalogRepository, $wizardData, $sharedCatalogBuilder, $duplicateManager);
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
