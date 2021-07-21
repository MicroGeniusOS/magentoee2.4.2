<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Company\Assign;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Company\Assign
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Company\Assign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\SharedCatalog\Model\Form\Storage\CompanyFactory $companyStorageFactory)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $companyStorageFactory);
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
