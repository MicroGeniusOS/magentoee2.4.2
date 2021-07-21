<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Companies;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Companies
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Companies implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface $sharedCatalogRepository, \Magento\SharedCatalog\Model\Form\Storage\CompanyFactory $companyStorageFactory, \Magento\SharedCatalog\Model\Form\Storage\Company\Builder $companyStorageBuilder)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $sharedCatalogRepository, $companyStorageFactory, $companyStorageBuilder);
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
