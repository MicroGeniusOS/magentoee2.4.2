<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\NegotiableQuote\Test\Unit\Helper;

use Magento\Company\Api\Data\CompanyExtensionFactory;
use Magento\Company\Api\Data\CompanyExtensionInterface;
use Magento\Company\Api\Data\CompanyInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface;
use Magento\NegotiableQuote\Helper\Company;
use Magento\NegotiableQuote\Model\CompanyQuoteConfigManagement;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Test for \Magento\NegotiableQuote\Helper\Company class.
 */
class CompanyTest extends TestCase
{
    /**
     * @var Company
     */
    private $helper;

    /**
     * @var CompanyExtensionFactory|MockObject
     */
    private $companyExtensionFactoryMock;

    /**
     * @var MockObject
     */
    private $quoteConfigManager;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $objectManagerHelper = new ObjectManager($this);
        $arguments = $objectManagerHelper->getConstructArguments(Company::class);
        $this->companyExtensionFactoryMock =
            $this->createPartialMock(CompanyExtensionFactory::class, ['create']);
        $this->quoteConfigManager = $this->createPartialMock(
            CompanyQuoteConfigManagement::class,
            ['getByCompanyId']
        );

        $arguments['quoteConfigManager'] = $this->quoteConfigManager;
        $arguments['companyExtensionFactory'] = $this->companyExtensionFactoryMock;

        $this->helper =
            $objectManagerHelper->getObject(Company::class, $arguments);
    }

    /**
     * Test for loadQuoteConfig.
     *
     * @return void
     */
    public function testLoadQuoteConfig()
    {
        $companyMock = $this->createPartialMock(
            \Magento\Company\Model\Company::class,
            ['setExtensionAttributes', 'getExtensionAttributes']
        );

        $companyExtensionMock = $this
            ->getMockBuilder(CompanyExtensionInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getQuoteConfig', 'setQuoteConfig'])
            ->getMockForAbstractClass();

        $companyQuoteConfigMock = $this
            ->getMockBuilder(CompanyQuoteConfigInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getQuoteConfig', 'setQuoteConfig'])
            ->getMockForAbstractClass();

        $companyExtensionMock
            ->expects($this->at(0))
            ->method('getQuoteConfig')
            ->willReturn(null);

        $companyExtensionMock->expects($this->at(1))->method('getQuoteConfig')->willReturn(
            $companyQuoteConfigMock
        );
        $this->quoteConfigManager
            ->expects($this->any())
            ->method('getByCompanyId')
            ->willReturn($companyQuoteConfigMock);

        $companyMock
            ->expects($this->at(0))
            ->method('getExtensionAttributes')
            ->willReturn($companyExtensionMock);
        $companyMock->expects($this->at(1))->method('getExtensionAttributes')->willReturn(
            $companyExtensionMock
        );

        $company = $this->helper->loadQuoteConfig($companyMock);

        $this->assertInstanceOf(CompanyInterface::class, $company);
    }
}
