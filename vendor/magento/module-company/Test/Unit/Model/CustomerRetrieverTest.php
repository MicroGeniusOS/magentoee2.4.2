<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Company\Test\Unit\Model;

use Magento\Company\Model\CustomerRetriever;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\Api\SearchCriteria;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\MockObject\Rule\InvokedCount;
use PHPUnit\Framework\MockObject\Stub\Exception;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use PHPUnit\Framework\TestCase;

/**
 * Unit test for Magento\Company\Model\CustomerRetriever class.
 */
class CustomerRetrieverTest extends TestCase
{
    /**
     * @var SearchCriteriaBuilder|MockObject
     */
    private $searchCriteriaBuilder;

    /**
     * @var CustomerRepositoryInterface|MockObject
     */
    private $customerRepository;

    /**
     * @var CustomerRetriever
     */
    private $model;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->searchCriteriaBuilder = $this->getMockBuilder(SearchCriteriaBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->customerRepository = $this->getMockBuilder(CustomerRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['get', 'getList'])
            ->getMockForAbstractClass();
        $objectManager = new ObjectManager($this);
        $this->model = $objectManager->getObject(
            CustomerRetriever::class,
            [
                'searchCriteriaBuilder' => $this->searchCriteriaBuilder,
                'customerRepository' => $this->customerRepository
            ]
        );
    }

    /**
     * Test retrieveByEmail method.
     *
     * @param $customer
     * @param InvokedCount $call
     * @param Exception|ReturnStub $result
     * @return void
     * @dataProvider retrieveCustomerDataProvider
     */
    public function testRetrieveByEmail($customer, $call, $result)
    {
        $email = 'customer@example.com';
        $this->customerRepository->expects($this->once())->method('get')->with($email)->will($result);
        $searchCriteria = $this
            ->getMockBuilder(SearchCriteria::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->searchCriteriaBuilder->expects($call)->method('addFilter')->willReturnSelf();
        $this->searchCriteriaBuilder->expects($call)->method('setPageSize')->willReturnSelf();
        $this->searchCriteriaBuilder->expects($call)->method('create')->willReturn($searchCriteria);
        $searchResults = $this
            ->getMockBuilder(SearchResultsInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $searchResults->expects($call)->method('getItems')->willReturn([$customer]);
        $this->customerRepository
            ->expects($call)
            ->method('getList')
            ->with($searchCriteria)
            ->willReturn($searchResults);

        $this->assertEquals($customer, $this->model->retrieveByEmail($email));
    }

    /**
     * Data provider for retrieveCustomer method.
     *
     * @return array
     */
    public function retrieveCustomerDataProvider(): array
    {
        $customer = $this->getMockBuilder(CustomerInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        return [
            [
                $customer,
                $this->atLeastOnce(),
                new Exception(new NoSuchEntityException()),
            ],
            [
                $customer,
                $this->never(),
                new ReturnStub($customer),
            ],
            [
                null,
                $this->never(),
                new ReturnStub(null),
            ],
        ];
    }

    /**
     * @covers \Magento\Company\Model\CustomerRetriever::retrieveForWebsite()
     *
     * @return void
     */
    public function testRetrieveForWebsite(): void
    {
        $email = 'test@test.com';
        $websiteId = '2';
        $customer = $this->getMockForAbstractClass(CustomerInterface::class);

        $this->customerRepository->expects($this->at(0))
            ->method('get')
            ->with($email, $websiteId)
            ->willReturn($customer);
        $this->customerRepository->expects($this->at(1))
            ->method('get')
            ->with($email, $websiteId)
            ->willThrowException(new NoSuchEntityException());

        $customerRetrieved = $this->model->retrieveForWebsite($email, $websiteId);
        $this->assertEquals($customer, $customerRetrieved);
        $this->assertNull($this->model->retrieveForWebsite($email, $websiteId));
    }
}
