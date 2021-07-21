<?php
namespace Magento\Company\Controller\Adminhtml\Index\MassEnable;

/**
 * Interceptor class for @see \Magento\Company\Controller\Adminhtml\Index\MassEnable
 */
class Interceptor extends \Magento\Company\Controller\Adminhtml\Index\MassEnable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Company\Model\ResourceModel\Company\CollectionFactory $collectionFactory, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Company\Api\CompanyManagementInterface $companyManagement)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $companyRepository, $companyManagement);
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
