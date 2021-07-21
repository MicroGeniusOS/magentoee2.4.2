<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyCredit\Test\Unit\Plugin\Sales\Model\Order;

use Magento\CompanyCredit\Model\CompanyCreditPaymentConfigProvider;
use Magento\CompanyCredit\Plugin\Sales\Model\Order\InvoiceQuantityValidatorPlugin;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Sales\Api\Data\InvoiceItemInterface;
use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\Order\Invoice;
use Magento\Sales\Model\Order\InvoiceQuantityValidator;
use Magento\Sales\Model\Order\Item;
use PHPUnit\Framework\TestCase;

/**
 * Unit test for validator invoice quantity.
 */
class InvoiceQuantityValidatorPluginTest extends TestCase
{
    /**
     * @var InvoiceQuantityValidatorPlugin
     */
    private $invoiceQuantityValidatorPlugin;

    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $objectManager = new ObjectManager($this);
        $this->invoiceQuantityValidatorPlugin = $objectManager->getObject(
            InvoiceQuantityValidatorPlugin::class
        );
    }

    /**
     * Test for aroundValidate method.
     *
     * @param int $itemQty
     * @param int $expect
     * @return void
     * @dataProvider aroundValidateDataProvider
     */
    public function testAroundValidate($itemQty, $expect)
    {
        $subject = $this->createMock(
            InvoiceQuantityValidator::class
        );
        $method = function ($invoice) {
            return [];
        };
        $invoice = $this->createMock(Invoice::class);
        $order = $this->createMock(Order::class);
        $orderPayment = $this->getMockForAbstractClass(OrderPaymentInterface::class);
        $invoice->expects($this->atLeastOnce())->method('getOrder')->willReturn($order);
        $order->expects($this->once())->method('getPayment')->willReturn($orderPayment);
        $orderPayment->expects($this->once())
            ->method('getMethod')
            ->willReturn(CompanyCreditPaymentConfigProvider::METHOD_NAME);

        $item = $this->createMock(
            Item::class
        );
        $item->expects($this->once())->method('getItemId')->willReturn(1);
        $item->expects($this->once())->method('getQtyOrdered')->willReturn(2);
        $order->expects($this->once())->method('getItems')->willReturn([$item]);

        $itemInvoice = $this->getMockForAbstractClass(InvoiceItemInterface::class);
        $itemInvoice->expects($this->atLeastOnce())->method('getOrderItemId')->willReturn(1);
        $itemInvoice->expects($this->once())->method('getQty')->willReturn($itemQty);
        $invoice->expects($this->once())->method('getItems')->willReturn([$itemInvoice]);

        $result = $this->invoiceQuantityValidatorPlugin->aroundValidate($subject, $method, $invoice);
        $this->assertCount($expect, $result);
    }

    /**
     * Data provider for test.
     *
     * @return array
     */
    public function aroundValidateDataProvider()
    {
        return [[2, 0], [1, 1]];
    }
}
