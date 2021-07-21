<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\PurchaseOrder\Plugin\Company\Model;

use Magento\Company\Model\Company;
use Magento\Company\Api\CompanyRepositoryInterface as CompanyRepositoryModel;
use Magento\PurchaseOrder\Model\Company\Config\Repository as PurchaseOrderCompanyConfigRepository;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * CompanyRepository plugin for saving purchase order company config
 */
class CompanyRepository
{
    /**
     * @var PurchaseOrderCompanyConfigRepository
     */
    private $purchaseOrderCompanyConfigRespository;

    /**
     * @param PurchaseOrderCompanyConfigRepository $purchaseOrderCompanyConfigRespository
     */
    public function __construct(
        PurchaseOrderCompanyConfigRepository $purchaseOrderCompanyConfigRespository
    ) {
        $this->purchaseOrderCompanyConfigRespository = $purchaseOrderCompanyConfigRespository;
    }

    /**
     * Save purchase order company config
     *
     * @param CompanyRepositoryModel $subject
     * @param Company $company
     * @return Company
     * @throws CouldNotSaveException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterSave(CompanyRepositoryModel $subject, Company $company)
    {
        $purchaseOrderCompanyConfig = $this->purchaseOrderCompanyConfigRespository->get($company->getId());

        $extensionAttributes = $company->getExtensionAttributes();

        $purchaseOrderCompanyConfig->setCompanyId($company->getId());

        $purchaseOrderCompanyConfig->setIsPurchaseOrderEnabled(
            (bool) $extensionAttributes->getIsPurchaseOrderEnabled()
        );

        $this->purchaseOrderCompanyConfigRespository->save($purchaseOrderCompanyConfig);

        return $company;
    }
}
