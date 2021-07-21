<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\QuickOrder\Test\Unit\Controller\Ajax;

use Magento\AdvancedCheckout\Model\Cart;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json as ResultJson;
use Magento\Framework\Controller\Result\JsonFactory as ResultJsonFactory;
use Magento\Framework\HTTP\PhpEnvironment\Request;
use Magento\Framework\Serialize\Serializer\Json as JsonSerializer;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\QuickOrder\Controller\Ajax\Search;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    /**
     * @var Search
     */
    protected $controller;

    /**
     * @var Request|MockObject
     */
    protected $requestMock;

    /**
     * @var ResultJson|MockObject
     */
    protected $resultJsonMock;

    /**
     * @var Cart|MockObject
     */
    private $cartMock;

    /**
     * @var JsonSerializer|MockObject
     */
    private $jsonSerializerMock;

    /**
     * Setup
     *
     * @return void
     */
    protected function setUp(): void
    {
        /** @var Context|MockObject $context */
        $context = $this->createMock(Context::class);
        $this->requestMock = $this->createMock(Request::class);
        $context->expects($this->once())
            ->method('getRequest')
            ->willReturn($this->requestMock);

        /** @var ResultJsonFactory|MockObject $resultJsonFactoryMock */
        $resultJsonFactoryMock = $this->createPartialMock(ResultJsonFactory::class, ['create']);

        $this->resultJsonMock = $this->createMock(ResultJson::class);
        $resultJsonFactoryMock->expects($this->once())
            ->method('create')
            ->willReturn($this->resultJsonMock);

        $this->cartMock = $this->createMock(Cart::class);
        $this->jsonSerializerMock = $this->createMock(JsonSerializer::class);

        $objectManager = new ObjectManager($this);
        $this->controller = $objectManager->getObject(
            Search::class,
            [
                'context' => $context,
                'resultJsonFactory' => $resultJsonFactoryMock,
                'cart' => $this->cartMock,
                'jsonSerializer' => $this->jsonSerializerMock,
            ]
        );
    }

    /**
     * Test different messages depending on number and type of items.
     *
     * @param array $postData
     * @param string $expectedErrorMessage
     * @return void
     * @dataProvider executeDataProvider
     */
    public function testExecute(array $postData, string $expectedErrorMessage): void
    {
        $isItemEmpty = $postData['items'][0]['sku'] === '';

        $this->requestMock->expects($this->at(0))
            ->method('getPostValue')
            ->willReturn($postData);

        if ($isItemEmpty) {
            $this->requestMock->expects($this->at(1))
                ->method('getPostValue')
                ->with('errorType', false)
                ->willReturn($postData['errorType'] ?? false);
        }

        $this->jsonSerializerMock->expects($this->once())
            ->method('unserialize')
            ->willReturn($postData['items']);

        $this->cartMock->expects($isItemEmpty ? $this->never() : $this->once())
            ->method('getAffectedItems')
            ->willReturn($postData['items']);

        $actualErrorMessage = '';
        $setDataCallback = function ($data) use (&$actualErrorMessage) {
            $actualErrorMessage = $data['generalErrorMessage'];
        };
        $this->resultJsonMock->expects($this->once())
            ->method('setData')->will($this->returnCallback($setDataCallback));
        $this->controller->execute();
        $this->assertEquals($expectedErrorMessage, $actualErrorMessage);
    }

    /**
     * DataProvider for testExecute().
     *
     * @return array[]
     */
    public function executeDataProvider(): array
    {
        $emptyItem = ['sku' => ''];

        return [
            'check_with_items' => [
                ['items' => [['sku' => 'example_sku']]],
                '',
            ],
            'check_without_items' => [
                ['items' => [$emptyItem]],
                (string)__('Cannot update item list.'),
            ],
            'check_with_incorrect_type' => [
                ['items' => [$emptyItem], 'errorType' => 'incorrect_type'],
                (string)__('Cannot update item list.'),
            ],
            'check_with_multiple_type' => [
                ['items' => [$emptyItem], 'errorType' => 'multiple'],
                (string)__('Entered list is empty.'),
            ],
            'check_with_item_type' => [
                ['items' => [$emptyItem], 'errorType' => 'item'],
                (string)__('You entered item(s) with an empty SKU.'),
            ],
            'check_with_file_type' => [
                ['items' => [$emptyItem], 'errorType' => 'file'],
                (string)__(
                    'The uploaded CSV file does not contain a column labelled SKU. ' .
                    'Make sure the first column is labelled SKU and that each line in the file contains a SKU value. ' .
                    'Then upload the file again.'
                ),
            ],
        ];
    }
}
