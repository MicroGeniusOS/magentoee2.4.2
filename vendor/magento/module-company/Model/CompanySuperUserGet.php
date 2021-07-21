<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Company\Model;

use Magento\Company\Api\Data\CompanyCustomerInterface;
use Magento\Company\Model\Customer\CompanyAttributes;
use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Customer\Api\Data\CustomerInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\LocalizedException;

/**
 * Creates or updates a company admin customer entity with given data during company save process in admin panel.
 */
class CompanySuperUserGet
{
    /**
     * @var CompanyAttributes
     */
    private $companyAttributes;

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var CustomerInterfaceFactory
     */
    private $customerDataFactory;

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    /**
     * @var AccountManagementInterface
     */
    private $accountManagement;

    /**
     * @var CustomerRetriever
     */
    private $customerRetriever;

    /**
     * @param CompanyAttributes $companyAttributes
     * @param CustomerRepositoryInterface $customerRepository
     * @param CustomerInterfaceFactory $customerDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param AccountManagementInterface $accountManagement
     * @param CustomerRetriever $customerRetriever
     */
    public function __construct(
        CompanyAttributes $companyAttributes,
        CustomerRepositoryInterface $customerRepository,
        CustomerInterfaceFactory $customerDataFactory,
        DataObjectHelper $dataObjectHelper,
        AccountManagementInterface $accountManagement,
        CustomerRetriever $customerRetriever
    ) {
        $this->companyAttributes = $companyAttributes;
        $this->customerRepository = $customerRepository;
        $this->customerDataFactory = $customerDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->accountManagement = $accountManagement;
        $this->customerRetriever = $customerRetriever;
    }

    /**
     * Get company admin user or create one if it does not exist.
     *
     * @param array $data
     * @return CustomerInterface
     * @throws LocalizedException
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function getUserForCompanyAdmin(array $data): CustomerInterface
    {
        unset($data['extension_attributes']);

        if (!isset($data['email'])) {
            throw new LocalizedException(
                __('No company admin email is specified in request.')
            );
        }
        if (!isset($data['website_id'])) {
            throw new LocalizedException(
                __('No company admin website ID is specified in request.')
            );
        }
        $companyAdminEmail = $data['email'];
        $websiteId = $data['website_id'];
        $customer = $this->customerRetriever->retrieveForWebsite(
            $companyAdminEmail,
            $websiteId
        );
        if (!$customer) {
            $customer = $this->customerDataFactory->create();
        }

        $this->dataObjectHelper->populateWithArray(
            $customer,
            $data,
            CustomerInterface::class
        );

        if (isset($data['sendemail_store_id']) && $data['sendemail_store_id'] !== false) {
            $customer->setStoreId($data['sendemail_store_id']);
            try {
                $this->accountManagement->validateCustomerStoreIdByWebsiteId($customer);
            } catch (LocalizedException $exception) {
                throw new LocalizedException(__("The Store View selected for sending Welcome email from".
                    " is not related to the customer's associated website."));
            }
        }

        $companyAttributes = $this->companyAttributes->getCompanyAttributesByCustomer($customer);
        $customerStatus = $customer->getId() ?
            $companyAttributes->getStatus() : CompanyCustomerInterface::STATUS_ACTIVE;
        if (isset($data[CompanyCustomerInterface::JOB_TITLE])) {
            $companyAttributes->setJobTitle($data[CompanyCustomerInterface::JOB_TITLE]);
        }
        if (!$companyAttributes->getStatus()) {
            $companyAttributes->setStatus($customerStatus);
        }
        if ($customer->getId()) {
            $customer = $this->customerRepository->save($customer);
        } else {
            $customer = $this->accountManagement->createAccountWithPasswordHash($customer, null);
        }

        return $customer;
    }
}
