<?php
namespace Magento\Company\Controller\Adminhtml\Customer\CompanyList;

/**
 * Interceptor class for @see \Magento\Company\Controller\Adminhtml\Customer\CompanyList
 */
class Interceptor extends \Magento\Company\Controller\Adminhtml\Customer\CompanyList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Company\Model\CountryInformationProvider $countryInformationProvider, \Magento\Framework\DB\Helper $dbHelper)
    {
        $this->___init();
        parent::__construct($context, $companyRepository, $searchCriteriaBuilder, $countryInformationProvider, $dbHelper);
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
