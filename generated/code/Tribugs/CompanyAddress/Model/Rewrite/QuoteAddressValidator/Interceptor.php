<?php
namespace Tribugs\CompanyAddress\Model\Rewrite\QuoteAddressValidator;

/**
 * Interceptor class for @see \Tribugs\CompanyAddress\Model\Rewrite\QuoteAddressValidator
 */
class Interceptor extends \Tribugs\CompanyAddress\Model\Rewrite\QuoteAddressValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Company\Api\CompanyManagementInterface $companyManagement, \Magento\Company\Model\CompanyUserPermission $companyUserPermission)
    {
        $this->___init();
        parent::__construct($addressRepository, $customerRepository, $customerSession, $companyManagement, $companyUserPermission);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Quote\Api\Data\AddressInterface $addressData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($addressData);
    }
}
