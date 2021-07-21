<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Tribugs\CompanyAddress\Plugin;

use Magento\Customer\Api\CustomerRepositoryInterface as CustomerRepository;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Customer\Model\Address\CustomerAddressDataProvider;
use Magento\Customer\Model\Context as CustomerContext;
use Magento\Company\Api\CompanyManagementInterface as CompanyManagement;
use Magento\Framework\App\Http\Context as HttpContext;
use Magento\Framework\App\ObjectManager;

class DefaultConfigProvider 
{        
    /**
     * @var CustomerRepository
     */
    private $customerRepository;

    /**
     * @var CustomerSession
     */
    private $customerSession;

    /**
     * @var companyContext
     */
    public $companyContext;
    
    /**
     * @var CompanyManagement
     */
    public $companyManagement;

    /**
     * @var CustomerAddressDataProvider
     */
    public $customerAddressData;

    /**
     * @var HttpContext
     */
    private $httpContext;

    /**
     * @var \Magento\Company\Model\CompanyUserPermission
     */
    private $companyUserPermission;

    /**
     * @param companyContext $companyContext
     * @param CustomerRepository $customerRepository
     * @param CustomerSession $customerSession
     * @param CustomerAddressDataProvider|null $customerAddressData
     * @param companyManagement|null $companyManagement
     * @param HttpContext $httpContext
     * @param \Magento\Company\Model\CompanyUserPermission $companyUserPermission
     **/

    public function __construct(\Magento\Company\Model\CompanyContext $companyContext,
        CustomerRepository $customerRepository,
        CustomerSession $customerSession,
        CustomerAddressDataProvider $customerAddressData = null,
        CompanyManagement $companyManagement = null,
        HttpContext $httpContext,
        \Magento\Company\Model\CompanyUserPermission $companyUserPermission) 
    {
        $this->customerRepository = $customerRepository;
        $this->customerSession = $customerSession;
        $this->companyContext = $companyContext;
        $this->customerAddressData = $customerAddressData ?:
            ObjectManager::getInstance()->get(CustomerAddressDataProvider::class);
        $this->companyManagement = $companyManagement ?: ObjectManager::getInstance()->get(
            CompanyManagement::class);
        $this->httpContext = $httpContext;
        $this->companyUserPermission = $companyUserPermission;
        
    }

    /**
     * Check if customer is logged in
     *
     * @return bool
     * @codeCoverageIgnore
     */
    private function isCustomerLoggedIn()
    {
        return (bool)$this->httpContext->getValue(CustomerContext::CONTEXT_AUTH);
    }  
   
    /**
     * Return configuration array
     *
     * @return array|mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterGetConfig(\Magento\Checkout\Model\DefaultConfigProvider $subject, $result)
    {
        /*// logging to test override    
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Your text message');*/

        $result['customerData'] =  $this->getcustomCustomerData();

        return $result;
    }

    /**
     * Retrieve customer data
     *
     * @return array
     */
    private function getcustomCustomerData()
    {   
        $companyAdmin = 0;
        $customerData = [];
        
        if ($this->isCustomerLoggedIn()) {

            $customer = $this->customerRepository->getById($this->customerSession->getCustomerId());
            $customerData = $customer->__toArray();
            $customerData['addresses'] = $this->customerAddressData->getAddressDataByCustomer($customer);
            if ($this->companyUserPermission->isCurrentUserCompanyUser()) { 
                $companyDetail = $this->companyManagement->getByCustomerId($this->customerSession->getCustomerId());  
                if($companyDetail){
                    $companyAdmin = (int) $companyDetail->getSuperUserId();                
                    $adminCustomer = $this->customerRepository->getById((int) $companyAdmin);  
                    $customerData['addresses'] = $this->customerAddressData->getAddressDataByCustomer($adminCustomer); 
                }
            } 
        }
        return $customerData;
    }
}

