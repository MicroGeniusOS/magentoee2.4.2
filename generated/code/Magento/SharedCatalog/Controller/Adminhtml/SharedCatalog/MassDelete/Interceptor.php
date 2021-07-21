<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\MassDelete;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\MassDelete
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\SharedCatalog\Model\ResourceModel\SharedCatalog\CollectionFactory $collectionFactory, \Psr\Log\LoggerInterface $logger, \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface $sharedCatalogRepository)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $logger, $sharedCatalogRepository);
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
