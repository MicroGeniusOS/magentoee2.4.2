<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Company\Test\Unit\Block\Link;

use Magento\Company\Api\CompanyManagementInterface;
use Magento\Company\Api\Data\CompanyInterface;
use Magento\Company\Block\Link\OrdersLink;
use Magento\Company\Model\CompanyContext;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Unit test for OrdersLink block.
 */
class OrdersLinkTest extends TestCase
{
    /**
     * @var CompanyContext|MockObject
     */
    private $companyContext;

    /**
     * @var CompanyManagementInterface|MockObject
     */
    private $companyManagement;

    /**
     * @var string
     */
    private $resource = 'view_link_resource';

    /**
     * @var OrdersLink
     */
    private $ordersLink;

    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->companyContext = $this->getMockBuilder(CompanyContext::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->companyManagement = $this->getMockBuilder(CompanyManagementInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $request = $this->getMockBuilder(RequestInterface::class)
            ->setMethods(['getControllerName', 'getPathInfo'])
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $objectManagerHelper = new ObjectManager($this);
        $this->ordersLink = $objectManagerHelper->getObject(
            OrdersLink::class,
            [
                'companyContext' => $this->companyContext,
                'companyManagement' => $this->companyManagement,
                '_request' => $request,
                'data' => ['resource' => $this->resource],
            ]
        );
    }

    /**
     * Test for toHtml method.
     *
     * @param bool $isAllowed
     * @param string $expectedResult
     * @return void
     * @dataProvider toHtmlDataProvider
     */
    public function testToHtml($isAllowed, $expectedResult)
    {
        $customerId = 1;
        $this->companyContext->expects($this->atLeastOnce())->method('getCustomerId')->willReturn($customerId);
        $company = $this->getMockBuilder(CompanyInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->companyManagement->expects($this->once())
            ->method('getByCustomerId')->with($customerId)->willReturn($company);
        $this->companyContext->expects($this->once())
            ->method('isResourceAllowed')->with($this->resource)->willReturn($isAllowed);
        $this->assertEquals($expectedResult, $this->ordersLink->toHtml());
    }

    /**
     * Data provider for testToHtml.
     *
     * @return array
     */
    public function toHtmlDataProvider()
    {
        return [
            [true, '<li class="nav item current"><strong></strong></li>'],
            [false, ''],
        ];
    }
}
