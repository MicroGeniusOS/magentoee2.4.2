<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyCredit\Test\Unit\Ui\Component\Company\Listing\Column;

use Magento\CompanyCredit\Ui\Component\Company\Listing\Column\AmountCurrency;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponent\Processor;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AmountCurrencyTest extends TestCase
{
    /**
     * @var PriceCurrencyInterface|MockObject
     */
    private $priceFormatter;

    /**
     * @var AmountCurrency
     */
    private $companyCreditColumn;

    /**
     * Set up.
     */
    protected function setUp(): void
    {
        $this->priceFormatter = $this->getMockForAbstractClass(PriceCurrencyInterface::class);
        $context = $this->getMockForAbstractClass(ContextInterface::class);
        $processor = $this->createMock(Processor::class);
        $context->expects($this->never())->method('getProcessor')->willReturn($processor);

        $objectManager = new ObjectManager($this);
        $this->companyCreditColumn = $objectManager->getObject(
            AmountCurrency::class,
            [
                'context' => $context,
                'priceFormatter' => $this->priceFormatter,
                '_data' => ['name' => 'balance']
            ]
        );
    }

    /**
     * Test method for prepareDataSource.
     *
     * @param array $dataSource
     * @param array $expected
     * @return void
     * @dataProvider prepareDataSourceDataProvider
     */
    public function testPrepareDataSource(array $dataSource, array $expected)
    {
        $i = 0;
        foreach ($dataSource as $item) {
            $this->priceFormatter->expects($this->at($i))->method('format')
                ->with($item['items'][$i]['balance'], false)
                ->willReturn($expected['data']['items'][$i]['balance']);
            $i++;
            if ($item['items'][$i]['balance'] != 0) {
                $this->priceFormatter->expects($this->at($i))->method('format')
                    ->with($item['items'][$i]['balance'], false)
                    ->willReturn($expected['data']['items'][$i]['balance']);
            }
        }

        $this->assertEquals($expected, $this->companyCreditColumn->prepareDataSource($dataSource));
    }

    /**
     * Data provider for prepareDataSource method.
     *
     * @return array
     */
    public function prepareDataSourceDataProvider()
    {
        return [
            [
                [
                    'data' => [
                        'items' => [
                            ['balance' => 100, 'currency_credit' => 'null'],
                            ['balance' => 200],
                        ]
                    ]
                ],
                [
                    'data' => [
                        'items' => [
                            ['balance' => '$100', 'currency_credit' => 'null'],
                            ['balance' => '$200'],
                        ]
                    ]
                ]
            ],
            [
                [
                    'data' => [
                        'items' => [
                            ['balance' => 100, 'currency_credit' => 'null'],
                            ['balance' => 0],
                        ]
                    ]
                ],
                [
                    'data' => [
                        'items' => [
                            ['balance' => '$100', 'currency_credit' => 'null'],
                            ['balance' => null],
                        ]
                    ]
                ]
            ]
        ];
    }
}
