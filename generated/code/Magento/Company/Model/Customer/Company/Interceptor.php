<?php
namespace Magento\Company\Model\Customer\Company;

/**
 * Interceptor class for @see \Magento\Company\Model\Customer\Company
 */
class Interceptor extends \Magento\Company\Model\Customer\Company implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Api\Data\CompanyInterfaceFactory $companyFactory, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Company\Model\Company\Structure $companyStructure, \Magento\Company\Api\Data\CompanyCustomerInterface $customerAttributes, \Magento\Company\Model\ResourceModel\Customer $customerResource, \Magento\Customer\Api\GroupManagementInterface $groupManagement)
    {
        $this->___init();
        parent::__construct($companyFactory, $companyRepository, $companyStructure, $customerAttributes, $customerResource, $groupManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function createCompany(\Magento\Customer\Api\Data\CustomerInterface $customer, array $companyData, $jobTitle = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCompany');
        return $pluginInfo ? $this->___callPlugins('createCompany', func_get_args(), $pluginInfo) : parent::createCompany($customer, $companyData, $jobTitle);
    }
}
