<?php
namespace Magento\CompanyCredit\Controller\Adminhtml\Index\MassConvert;

/**
 * Interceptor class for @see \Magento\CompanyCredit\Controller\Adminhtml\Index\MassConvert
 */
class Interceptor extends \Magento\CompanyCredit\Controller\Adminhtml\Index\MassConvert implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Company\Model\ResourceModel\Company\CollectionFactory $companyCollectionFactory, \Magento\CompanyCredit\Api\CreditLimitManagementInterface $creditLimitManagement, \Magento\CompanyCredit\Api\CreditLimitRepositoryInterface $creditLimitRepository)
    {
        $this->___init();
        parent::__construct($context, $filter, $companyCollectionFactory, $creditLimitManagement, $creditLimitRepository);
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
