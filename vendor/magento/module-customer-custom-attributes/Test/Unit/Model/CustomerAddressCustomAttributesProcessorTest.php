<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CustomerCustomAttributes\Test\Unit\Model;

use Magento\Framework\Api\AttributeInterface;
use Magento\Quote\Api\Data\AddressInterface;
use Magento\CustomerCustomAttributes\Model\CustomerAddressCustomAttributesProcessor;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Test process custom customer attributes before saving address
 */
class CustomerAddressCustomAttributesProcessorTest extends TestCase
{
    /**
     * @var CustomerAddressCustomAttributesProcessor
     */
    protected $model;

    /**
     * @var AddressInterface| MockObject
     */
    protected $addressMock;

    /**
     * Prepare testable object
     */
    protected function setUp(): void
    {
        $this->addressMock = $this->getMockBuilder(
            AddressInterface::class
        )
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $this->model = new CustomerAddressCustomAttributesProcessor();
    }

    /**
     * Test before save address information
     *
     * @dataProvider prepareDataSourceProvider
     * @param array $customAttributeArr1
     * @param array $customAttributeArr2
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testExecute(
        array $customAttributeArr1,
        array $customAttributeArr2
    ): void {
        $customAttribute1 = $this->getMockForAbstractClass(
            AttributeInterface::class
        );
        $customAttribute1
            ->expects($this->any())
            ->method('setAttributeCode')
            ->with($customAttributeArr1['code'])
            ->willReturnSelf();
        $customAttribute1
            ->expects($this->any())
            ->method('getAttributeCode')
            ->willReturn($customAttributeArr1['code']);
        $customAttribute1
            ->expects($this->any())
            ->method('getValue')
            ->willReturn($customAttributeArr1['value']);
        $customAttribute2 = $this->getMockForAbstractClass(
            AttributeInterface::class
        );
        $customAttribute2
            ->expects($this->any())
            ->method('setAttributeCode')
            ->with($customAttributeArr2['code'])
            ->willReturnSelf();
        $customAttribute2
            ->expects($this->any())
            ->method('getAttributeCode')
            ->willReturn($customAttributeArr2['code']);
        $customAttribute2
            ->expects($this->any())
            ->method('getValue')
            ->willReturn($customAttributeArr2['value']);
        $this->addressMock
            ->expects($this->any())
            ->method('getCustomAttributes')
            ->willReturn(
                [
                    $customAttribute1,
                    $customAttribute2
                ]
            );
        $this->model->execute(
            $this->addressMock
        );
    }

    /**
     * Data provider data source
     * @return array
     */
    public function prepareDataSourceProvider(): array
    {
        return [
            'with flat attribute code and value' => [
                [
                    'code' => 'test_attribute_1',
                    'value' =>  'test_value_1'
                ],
                [
                    'code' => 'test_attribute_2',
                    'value' =>  'test_value_2'
                ]
            ],
            'with attribute value as array' => [
                [
                    'code' => 'test_attribute_1',
                    'value' => [
                        'attribute_code' => 'test_attribute_1',
                        'value' => 'test_value_1'
                    ]
                ],
                [
                    'code' => 'test_attribute_2',
                    'value' => [
                        'attribute_code' => 'test_attribute_2',
                        'value' => 'test_value_2'
                    ]
                ]
            ]
        ];
    }
}
