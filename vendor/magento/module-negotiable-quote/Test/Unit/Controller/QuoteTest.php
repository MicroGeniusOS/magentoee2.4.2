<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\NegotiableQuote\Test\Unit\Controller;

use Magento\Authorization\Model\UserContextInterface;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface;
use Magento\NegotiableQuote\Controller\Quote\View;
use Magento\NegotiableQuote\Helper\Quote;
use Magento\NegotiableQuote\Model\Restriction\RestrictionInterface;
use Magento\NegotiableQuote\Model\Restriction\RestrictionInterfaceFactory;
use Magento\NegotiableQuote\Model\SettingsProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Test Magento\NegotiableQuote\Controller\Quote abstract class using Magento\NegotiableQuote\Controller\Quote\View.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class QuoteTest extends TestCase
{
    /**
     * @var View
     */
    private $quoteController;

    /**
     * @var SettingsProvider|MockObject
     */
    private $settingsProvider;

    /**
     * @var Quote|MockObject
     */
    private $quoteHelper;

    /**
     * @var ActionFlag|MockObject
     */
    private $actionFlag;

    /**
     * @var RequestInterface|MockObject
     */
    private $request;

    /**
     * @var RedirectInterface|MockObject
     */
    private $redirect;

    /**
     * @var ResponseInterface|MockObject
     */
    private $response;

    /**
     * @var RestrictionInterface|MockObject
     */
    protected $customerRestriction;

    /**
     * @var RestrictionInterfaceFactory|MockObject
     */
    private $restrictionFactory;

    /**
     * @var NegotiableQuoteManagementInterface|MockObject
     */
    private $negotiableQuoteManagement;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->request = $this->getMockBuilder(RequestInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(
                ['isAjax', 'getFullActionName', 'getRouteName', 'isDispatched', 'initForward', 'setDispatched']
            )
            ->getMockForAbstractClass();
        $this->settingsProvider = $this->getMockBuilder(SettingsProvider::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->quoteHelper = $this->getMockBuilder(Quote::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->actionFlag = $this->getMockBuilder(ActionFlag::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->redirect = $this->getMockBuilder(RedirectInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->response = $this->getMockBuilder(ResponseInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->customerRestriction = $this->getMockBuilder(
            RestrictionInterface::class
        )
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->restrictionFactory = $this->getMockBuilder(RestrictionInterfaceFactory::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->negotiableQuoteManagement = $this->getMockBuilder(NegotiableQuoteManagementInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $objectManager = new ObjectManager($this);
        $this->quoteController = $objectManager->getObject(
            View::class,
            [
                'settingsProvider' => $this->settingsProvider,
                'quoteHelper' => $this->quoteHelper,
                'customerRestriction' => $this->customerRestriction,
                '_request' => $this->request,
                '_actionFlag' => $this->actionFlag,
                '_redirect' => $this->redirect,
                '_response' => $this->response,
                'restrictionFactory' => $this->restrictionFactory,
                'negotiableQuoteManagement' => $this->negotiableQuoteManagement,
            ]
        );
    }

    /**
     * Test dispatch method.
     *
     * @return void
     */
    public function testDispatch(): void
    {
        $result = $this->getMockBuilder(Json::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->settingsProvider->expects($this->once())->method('isModuleEnabled')->willReturn(true);
        $this->settingsProvider->expects($this->once())
            ->method('getCurrentUserType')
            ->willReturn(UserContextInterface::USER_TYPE_ADMIN);
        $this->request->expects($this->once())->method('isAjax')->willReturn(true);
        $this->settingsProvider->expects($this->once())
            ->method('getCustomerLoginUrl')
            ->willReturn('customer/account/login');
        $this->settingsProvider->expects($this->once())
            ->method('retrieveJsonError')
            ->with('', 'customer/account/login')
            ->willReturn($result);

        $this->assertEquals($result, $this->quoteController->dispatch($this->request));
    }

    /**
     * Test dispatch with FLAG_NO_DISPATCH.
     *
     * @return void
     */
    public function testDispatchWithFlagNoDispatch(): void
    {
        $this->settingsProvider->expects($this->once())->method('isModuleEnabled')->willReturn(true);
        $this->settingsProvider->expects($this->once())
            ->method('getCurrentUserType')
            ->willReturn(UserContextInterface::USER_TYPE_CUSTOMER);
        $this->quoteHelper->expects($this->once())->method('getCurrentUserId')->willReturn(null);
        $this->actionFlag->expects($this->once())->method('set')->with()->willReturnSelf('', 'no-dispatch', true);

        $this->assertInstanceOf(
            ResponseInterface::class,
            $this->quoteController->dispatch($this->request)
        );
    }

    /**
     * Test dispatch with enabled quote but with disabled resource.
     *
     * @param bool $isCurrentUserCompanyUser
     * @param string $redirectPath
     * @dataProvider dispatchWithDisabledQuoteDataProvider
     * @return void
     */
    public function testDispatchWithDisabledQuote(bool $isCurrentUserCompanyUser, string $redirectPath): void
    {
        $this->settingsProvider->expects($this->once())->method('isModuleEnabled')->willReturn(true);
        $this->settingsProvider->expects($this->once())
            ->method('getCurrentUserType')
            ->willReturn(UserContextInterface::USER_TYPE_CUSTOMER);
        $this->quoteHelper->expects($this->once())->method('getCurrentUserId')->willReturn(1);
        $this->settingsProvider->expects($this->once())
            ->method('isCurrentUserCompanyUser')
            ->willReturn($isCurrentUserCompanyUser);
        $this->redirect->expects($this->atLeastOnce())->method('redirect')->with($this->response, $redirectPath, []);
        $this->quoteHelper->expects($this->atLeastOnce())->method('isEnabled')->willReturn(false);

        $this->assertInstanceOf(
            ResponseInterface::class,
            $this->quoteController->dispatch($this->request)
        );
    }

    /**
     * Data provider for dispatch() with disabled quote.
     *
     * @return array
     */
    public function dispatchWithDisabledQuoteDataProvider(): array
    {
        return [
            [true, 'company/accessdenied'],
            [false, 'noroute']
        ];
    }

    /**
     * Test dispatch with Exception.
     *
     * @return void
     */
    public function testDispatchWithException(): void
    {
        $this->expectException('Magento\Framework\Exception\NotFoundException');
        $this->settingsProvider->expects($this->once())->method('isModuleEnabled')->willReturn(false);
        $this->quoteController->dispatch($this->request);
    }
}
