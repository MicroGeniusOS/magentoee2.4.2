<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Company\Test\Unit\Controller\Adminhtml\Index;

use Magento\Company\Api\CompanyRepositoryInterface;
use Magento\Company\Api\Data\CompanyInterface;
use Magento\Company\Controller\Adminhtml\Index\InlineEdit;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Message\Collection;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Message\MessageInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class InlineEditTest extends TestCase
{
    /** @var InlineEdit */
    protected $controller;

    /** @var RequestInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $request;

    /** @var ManagerInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $messageManager;

    /** @var CompanyInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $companyData;

    /** @var JsonFactory|\PHPUnit\Framework\MockObject_MockObject */
    protected $resultJsonFactory;

    /** @var Json|\PHPUnit\Framework\MockObject_MockObject */
    protected $resultJson;

    /** @var CompanyRepositoryInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $companyRepository;

    /** @var DataObjectHelper|\PHPUnit\Framework\MockObject_MockObject */
    protected $dataObjectHelper;

    /** @var Collection|\PHPUnit\Framework\MockObject_MockObject */
    protected $messageCollection;

    /** @var MessageInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $message;

    /** @var LoggerInterface|\PHPUnit\Framework\MockObject_MockObject */
    protected $logger;

    /** @var array */
    protected $items;

    /**
     * Set up
     *
     * @return void
     */
    protected function setUp(): void
    {
        $objectManager = new ObjectManager($this);

        $this->request = $this->getMockForAbstractClass(RequestInterface::class, [], '', false);
        $this->messageManager = $this->getMockForAbstractClass(
            ManagerInterface::class,
            [],
            '',
            false
        );
        $this->companyData = $this->getMockForAbstractClass(
            CompanyInterface::class,
            [],
            '',
            false
        );
        $this->resultJsonFactory = $this->createPartialMock(
            JsonFactory::class,
            ['create']
        );
        $this->resultJson = $this->createMock(Json::class);
        $this->companyRepository = $this->getMockForAbstractClass(
            CompanyRepositoryInterface::class,
            [],
            '',
            false
        );
        $this->dataObjectHelper = $this->createMock(DataObjectHelper::class);
        $this->messageCollection = $this->createMock(Collection::class);
        $this->message = $this->getMockForAbstractClass(
            MessageInterface::class,
            [],
            '',
            false
        );
        $this->logger = $this->getMockForAbstractClass(LoggerInterface::class, [], '', false);
        $this->controller = $objectManager->getObject(
            InlineEdit::class,
            [
                'companyRepository' => $this->companyRepository,
                'resultJsonFactory' => $this->resultJsonFactory,
                'dataObjectHelper' => $this->dataObjectHelper,
                'logger' => $this->logger,
                '_request' => $this->request,
                'messageManager' => $this->messageManager,
            ]
        );

        $this->items = [
            14 => [
                'email' => 'test@test.ua',
            ]
        ];
    }

    /**
     * Prepare mocks for testing
     *
     * @return void
     */
    protected function prepareMocksForTesting()
    {
        $this->resultJsonFactory->expects($this->once())
            ->method('create')
            ->willReturn($this->resultJson);
        $this->request->expects($this->at(0))
            ->method('getParam')
            ->with('items', [])
            ->willReturn($this->items);
        $this->request->expects($this->at(1))
            ->method('getParam')
            ->with('isAjax')
            ->willReturn(true);
        $this->companyRepository->expects($this->once())
            ->method('get')
            ->with(14)
            ->willReturn($this->companyData);
        $this->dataObjectHelper->expects($this->any())
            ->method('populateWithArray')
            ->with(
                $this->companyData,
                [
                    'email' => 'test@test.ua',
                ],
                CompanyInterface::class
            );
        $this->companyData->expects($this->any())
            ->method('getId')
            ->willReturn(12);
    }

    /**
     * Prepare mocks for error messages processing
     *
     * @return void
     */
    protected function prepareMocksForErrorMessagesProcessing()
    {
        $this->messageManager->expects($this->atLeastOnce())
            ->method('getMessages')
            ->willReturn($this->messageCollection);
        $this->messageCollection->expects($this->once())
            ->method('getItems')
            ->willReturn([$this->message]);
        $this->messageCollection->expects($this->once())
            ->method('getCount')
            ->willReturn(1);
        $this->message->expects($this->once())
            ->method('getText')
            ->willReturn('Error text');
        $this->resultJson->expects($this->once())
            ->method('setData')
            ->with(
                [
                    'messages' => ['Error text'],
                    'error' => true,
                ]
            )
            ->willReturnSelf();
    }

    /**
     * Test for method execute
     *
     * @return void
     */
    public function testExecute()
    {
        $this->prepareMocksForTesting();
        $this->companyRepository->expects($this->once())
            ->method('save')
            ->with($this->companyData);
        $this->prepareMocksForErrorMessagesProcessing();
        $this->assertSame($this->resultJson, $this->controller->execute());
    }

    /**
     * Test for method execute without items
     *
     * @return void
     */
    public function testExecuteWithoutItems()
    {
        $this->resultJsonFactory->expects($this->once())
            ->method('create')
            ->willReturn($this->resultJson);
        $this->request->expects($this->at(0))
            ->method('getParam')
            ->with('items', [])
            ->willReturn([]);
        $this->request->expects($this->at(1))
            ->method('getParam')
            ->with('isAjax')
            ->willReturn(false);
        $this->resultJson
            ->expects($this->once())
            ->method('setData')
            ->with(
                [
                    'messages' => [__('Please correct the data sent.')],
                    'error' => true,
                ]
            )
            ->willReturnSelf();
        $this->assertSame($this->resultJson, $this->controller->execute());
    }

    /**
     * Test for method execute with localized exception
     *
     * @return void
     */
    public function testExecuteLocalizedException()
    {
        $exception = new LocalizedException(__('Exception message'));
        $this->prepareMocksForTesting();
        $this->companyRepository->expects($this->once())
            ->method('save')
            ->with($this->companyData)
            ->willThrowException($exception);
        $this->messageManager->expects($this->once())
            ->method('addError')
            ->with('[Company ID: 12] can not be saved');
        $this->logger->expects($this->once())
            ->method('critical')
            ->with($exception);

        $this->prepareMocksForErrorMessagesProcessing();
        $this->assertSame($this->resultJson, $this->controller->execute());
    }

    /**
     * Test for method execute with input exception
     *
     * @return void
     */
    public function testExecuteInputException()
    {
        $exception = new InputException(__('Exception message'));
        $this->prepareMocksForTesting();
        $this->companyRepository->expects($this->once())
            ->method('save')
            ->with($this->companyData)
            ->willThrowException($exception);
        $this->messageManager->expects($this->once())
            ->method('addError')
            ->with('[Company ID: 12] can not be saved');
        $this->logger->expects($this->once())
            ->method('critical')
            ->with($exception);

        $this->prepareMocksForErrorMessagesProcessing();
        $this->assertSame($this->resultJson, $this->controller->execute());
    }

    /**
     * Test for method execute with exception
     *
     * @return void
     */
    public function testExecuteException()
    {
        $exception = new \Exception('Exception message');
        $this->prepareMocksForTesting();
        $this->companyRepository->expects($this->once())
            ->method('save')
            ->with($this->companyData)
            ->willThrowException($exception);
        $this->messageManager->expects($this->once())
            ->method('addError')
            ->with('[Company ID: 12] can not be saved');
        $this->logger->expects($this->once())
            ->method('critical')
            ->with($exception);

        $this->prepareMocksForErrorMessagesProcessing();
        $this->assertSame($this->resultJson, $this->controller->execute());
    }
}
