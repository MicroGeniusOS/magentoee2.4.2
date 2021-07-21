<?php
namespace Magento\Company\Controller\Adminhtml\Index\InlineEdit;

/**
 * Interceptor class for @see \Magento\Company\Controller\Adminhtml\Index\InlineEdit
 */
class Interceptor extends \Magento\Company\Controller\Adminhtml\Index\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Psr\Log\LoggerInterface $logger, \Magento\Company\Api\CompanyManagementInterface $companyManagement)
    {
        $this->___init();
        parent::__construct($context, $companyRepository, $resultJsonFactory, $dataObjectHelper, $logger, $companyManagement);
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
