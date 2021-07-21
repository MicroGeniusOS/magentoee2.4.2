<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SharedCatalog\Test\Unit\Controller\Adminhtml\SharedCatalog\Configure;

use Magento\Authorization\Model\UserContextInterface;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Backend\Model\View\Result\RedirectFactory as BackendRedirectFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\SharedCatalog\Api\Data\SharedCatalogInterface;
use Magento\SharedCatalog\Api\PriceManagementInterface;
use Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Save;
use Magento\SharedCatalog\Model\Configure\Category;
use Magento\SharedCatalog\Model\Form\Storage\DiffProcessor;
use Magento\SharedCatalog\Model\Form\Storage\Wizard;
use Magento\SharedCatalog\Model\Form\Storage\WizardFactory;
use Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\ScheduleBulk;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Unit test for save configuration controller.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class SaveTest extends TestCase
{
    /**
     * @var RedirectFactory|MockObject
     */
    private $resultRedirectFactory;

    /**
     * @var Category|MockObject
     */
    private $configureCategory;

    /**
     * @var WizardFactory|MockObject
     */
    private $wizardStorageFactory;

    /**
     * @var Wizard|MockObject
     */
    private $wizardStorage;

    /**
     * @var RequestInterface|MockObject
     */
    private $request;

    /**
     * @var Redirect|MockObject
     */
    private $resultRedirectMock;

    /**
     * @var LoggerInterface|MockObject
     */
    private $logger;

    /**
     * @var ScheduleBulk|MockObject
     */
    private $scheduleBulk;

    /**
     * @var PriceManagementInterface|MockObject
     */
    private $priceSharedCatalogManagement;

    /**
     * @var ManagerInterface|MockObject
     */
    private $messageManager;

    /**
     * @var Save
     */
    private $save;

    /**
     * @var Wizard|MockObject
     */
    private $storage;

    /**
     * @var UserContextInterface|MockObject
     */
    private $userContext;

    /**
     * @var DiffProcessor|MockObject
     */
    private $diffProcessor;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->request = $this->getMockBuilder(RequestInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->resultRedirectFactory = $this->getMockBuilder(
            BackendRedirectFactory::class
        )
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMockForAbstractClass();
        $this->resultRedirectMock = $this->getMockBuilder(Redirect::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->wizardStorageFactory = $this->getMockBuilder(
            WizardFactory::class
        )
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $this->wizardStorage = $this->getMockBuilder(Wizard::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->scheduleBulk = $this->getMockBuilder(
            ScheduleBulk::class
        )
            ->disableOriginalConstructor()
            ->getMock();
        $this->configureCategory = $this->getMockBuilder(Category::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->wizardStorageFactory = $this->getMockBuilder(
            WizardFactory::class
        )
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $this->logger = $this->getMockBuilder(LoggerInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->scheduleBulk = $this->getMockBuilder(
            ScheduleBulk::class
        )
            ->disableOriginalConstructor()
            ->getMock();
        $this->priceSharedCatalogManagement = $this->getMockBuilder(
            PriceManagementInterface::class
        )
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->resultRedirectFactory = $this->getMockBuilder(
            BackendRedirectFactory::class
        )
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $this->messageManager = $this->getMockBuilder(ManagerInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $this->userContext = $this->getMockBuilder(UserContextInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->diffProcessor = $this->getMockBuilder(DiffProcessor::class)
            ->disableOriginalConstructor()
            ->setMethods(['getDiff'])
            ->getMockForAbstractClass();

        $objectManager = new ObjectManager($this);
        $this->save = $objectManager->getObject(
            Save::class,
            [
                'configureCategory' => $this->configureCategory,
                'wizardStorageFactory' => $this->wizardStorageFactory,
                'logger' => $this->logger,
                'scheduleBulk' => $this->scheduleBulk,
                'priceSharedCatalogManagement' => $this->priceSharedCatalogManagement,
                'userContextInterface' => $this->userContext,
                'diffProcessor' => $this->diffProcessor,
                '_request' => $this->request,
                'resultRedirectFactory' => $this->resultRedirectFactory,
                'messageManager' => $this->messageManager
            ]
        );
    }

    /**
     * Test for method execute.
     *
     * @return void
     */
    public function testExecute()
    {
        $changes = [
            'pricesChanged' => false,
            'categoriesChanged' => false,
            'productsChanged' => true,
        ];

        $this->prepareExecuteBody();
        $this->diffProcessor->expects($this->once())
            ->method('getDiff')
            ->willReturn($changes);
        $message = __(
            'The selected changes have been applied to the shared catalog.'
        );
        $this->messageManager->expects($this->once())->method('addSuccessMessage')
            ->with($message)->willReturnSelf();
        $result = $this->prepareExecuteResultMock();

        $this->assertEquals($result, $this->save->execute());
    }

    /**
     * Test for method execute with success message about changed categories.
     *
     * @return void
     */
    public function testExecuteWithMessageAboutChangedCategories()
    {
        $changes = [
            'pricesChanged' => false,
            'categoriesChanged' => true
        ];

        $this->prepareExecuteBody();
        $this->diffProcessor->expects($this->once())
            ->method('getDiff')
            ->willReturn($changes);
        $message = __(
            'The selected items are being processed. You can continue to work in the meantime.'
        );

        $this->messageManager->expects($this->once())
            ->method('addSuccessMessage')
            ->with($message)
            ->willReturnSelf();
        $result = $this->prepareExecuteResultMock();

        $this->assertEquals($result, $this->save->execute());
    }

    /**
     * Prepare Result mock for execute() method test.
     *
     * @return MockObject
     */
    private function prepareExecuteResultMock()
    {
        $result = $this->getMockBuilder(\Magento\Framework\Controller\Result\Redirect::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->resultRedirectFactory->expects($this->once())->method('create')->willReturn($result);
        $result->expects($this->once())
            ->method('setPath')->with('shared_catalog/sharedCatalog/index')->willReturnSelf();

        return $result;
    }

    /**
     * Prepare body for execute() method test.
     *
     * @return void
     */
    private function prepareExecuteBody()
    {
        $configurationKey = 'configuration_key';
        $sharedCatalogId = 1;
        $storeId = 2;
        $productSkus = ['sku1', 'sku2'];
        $tierPrices = [3 => 10, 4 => 15, 5 => 20];

        $this->request->expects($this->at(0))->method('getParam')->with('catalog_id')->willReturn($sharedCatalogId);
        $this->request->expects($this->at(1))
            ->method('getParam')->with('configure_key')->willReturn($configurationKey);
        $this->request->expects($this->at(2))->method('getParam')->with('store_id')->willReturn($storeId);
        $this->storage = $this->getMockBuilder(Wizard::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->wizardStorageFactory
            ->expects($this->once())->method('create')->with(['key' => $configurationKey])->willReturn($this->storage);
        $sharedCatalog = $this->getMockBuilder(SharedCatalogInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->configureCategory->expects($this->once())->method('saveConfiguredCategories')
            ->with($this->storage, $sharedCatalogId, $storeId)->willReturn($sharedCatalog);
        $this->storage->expects($this->once())->method('getUnassignedProductSkus')->willReturn($productSkus);
        $this->priceSharedCatalogManagement->expects($this->once())
            ->method('deleteProductTierPrices')->with($sharedCatalog, $productSkus)->willReturnSelf();
        $this->storage->expects($this->once())->method('getTierPrices')->willReturn($tierPrices);
        $this->scheduleBulk->expects($this->once())->method('execute')->with($sharedCatalog, $tierPrices);
    }

    /**
     * Test for method execute with exception.
     *
     * @return void
     */
    public function testExecuteWithException()
    {
        $configurationKey = 'configuration_key';
        $sharedCatalogId = 1;
        $storeId = 2;
        $exception = new \Exception('Exception Message');
        $this->request->expects($this->at(0))->method('getParam')->with('catalog_id')->willReturn($sharedCatalogId);
        $this->request->expects($this->at(1))
            ->method('getParam')->with('configure_key')->willReturn($configurationKey);
        $this->request->expects($this->at(2))->method('getParam')->with('store_id')->willReturn($storeId);
        $storage = $this->getMockBuilder(Wizard::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->wizardStorageFactory
            ->expects($this->once())->method('create')->with(['key' => $configurationKey])->willReturn($storage);
        $this->configureCategory->expects($this->once())->method('saveConfiguredCategories')
            ->with($storage, $sharedCatalogId, $storeId)->willThrowException($exception);
        $this->logger->expects($this->once())->method('critical')->with($exception);
        $this->messageManager->expects($this->once())
            ->method('addErrorMessage')->with($exception->getMessage())->willReturnSelf();
        $result = $this->getMockBuilder(\Magento\Framework\Controller\Result\Redirect::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->resultRedirectFactory->expects($this->once())->method('create')->willReturn($result);
        $result->expects($this->once())
            ->method('setPath')->with('shared_catalog/sharedCatalog/index')->willReturnSelf();
        $this->assertEquals($result, $this->save->execute());
    }

    /**
     * Test for method execute with InvalidArgumentException.
     *
     * @return void
     */
    public function testExecuteWithInvalidArgumentException()
    {
        $configurationKey = 'configuration_key';
        $sharedCatalogId = 1;
        $storeId = 2;
        $exception = new \InvalidArgumentException('Exception Message');
        $this->request->expects($this->at(0))->method('getParam')->with('catalog_id')->willReturn($sharedCatalogId);
        $this->request->expects($this->at(1))
            ->method('getParam')->with('configure_key')->willReturn($configurationKey);
        $this->request->expects($this->at(2))->method('getParam')->with('store_id')->willReturn($storeId);
        $storage = $this->getMockBuilder(Wizard::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->wizardStorageFactory
            ->expects($this->once())->method('create')->with(['key' => $configurationKey])->willReturn($storage);
        $this->configureCategory->expects($this->once())->method('saveConfiguredCategories')
            ->with($storage, $sharedCatalogId, $storeId)->willThrowException($exception);
        $this->logger->expects($this->once())->method('critical')->with($exception);
        $result = $this->getMockBuilder(\Magento\Framework\Controller\Result\Redirect::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->resultRedirectFactory->expects($this->once())->method('create')->willReturn($result);
        $result->expects($this->once())
            ->method('setPath')->with('shared_catalog/sharedCatalog/index')->willReturnSelf();
        $this->assertEquals($result, $this->save->execute());
    }
}
