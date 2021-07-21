<?php
namespace Magento\Company\Controller\Adminhtml\Index\Save;

/**
 * Interceptor class for @see \Magento\Company\Controller\Adminhtml\Index\Save
 */
class Interceptor extends \Magento\Company\Controller\Adminhtml\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Company\Model\CompanySuperUserGet $superUser, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Company\Api\Data\CompanyInterfaceFactory $companyDataFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper)
    {
        $this->___init();
        parent::__construct($context, $dataObjectProcessor, $superUser, $companyRepository, $companyDataFactory, $dataObjectHelper);
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
    public function setCompanyRequestData(\Magento\Company\Api\Data\CompanyInterface $company, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCompanyRequestData');
        return $pluginInfo ? $this->___callPlugins('setCompanyRequestData', func_get_args(), $pluginInfo) : parent::setCompanyRequestData($company, $data);
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
