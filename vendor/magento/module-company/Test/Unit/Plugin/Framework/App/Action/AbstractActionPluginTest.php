<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Company\Test\Unit\Plugin\Framework\App\Action;

use Magento\Company\Plugin\Framework\App\Action\AbstractActionPlugin;
use Magento\Company\Plugin\Framework\App\Action\CustomerLoginChecker;
use Magento\Framework\App\Action\AbstractAction;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Framework\UrlInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AbstractActionPluginTest extends TestCase
{
    /**
     * @var ResultFactory|MockObject
     */
    private $resultFactory;

    /**
     * @var UrlInterface|MockObject
     */
    private $urlBuilder;

    /**
     * @var CustomerLoginChecker|MockObject
     */
    private $customerLoginChecker;

    /**
     * @var AbstractActionPlugin
     */
    private $plugin;

    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->resultFactory = $this
            ->getMockBuilder(ResultFactory::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->urlBuilder = $this
            ->getMockBuilder(UrlInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getUrl'])
            ->getMockForAbstractClass();
        $this->customerLoginChecker = $this
            ->getMockBuilder(CustomerLoginChecker::class)
            ->disableOriginalConstructor()
            ->setMethods(['isLoginAllowed'])
            ->getMockForAbstractClass();
        $objectManagerHelper = new ObjectManager($this);
        $this->plugin = $objectManagerHelper->getObject(
            AbstractActionPlugin::class,
            [
                'customerLoginChecker' => $this->customerLoginChecker,
                'resultFactory' => $this->resultFactory,
                'urlBuilder' => $this->urlBuilder
            ]
        );
    }

    /**
     * Test aroundDispatch method.
     *
     * @return void
     */
    public function testAroundDispatch()
    {
        $subject = $this
            ->getMockBuilder(AbstractAction::class)
            ->disableOriginalConstructor()
            ->getMock();
        $request = $this
            ->getMockBuilder(RequestInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['isPost', 'isAjax'])
            ->getMockForAbstractClass();
        $redirect = $this
            ->getMockBuilder(Redirect::class)
            ->setMethods(['setData', 'setPath'])
            ->disableOriginalConstructor()
            ->getMock();
        $proceed = function ($request) {
            return true;
        };
        $this->customerLoginChecker->expects($this->once())->method('isLoginAllowed')->willReturn(true);
        $request->expects($this->once())->method('isPost')->willReturn(true);
        $this->resultFactory->expects($this->at(0))
            ->method('create')
            ->with(ResultFactory::TYPE_REDIRECT)
            ->willReturn($redirect);
        $redirect->expects($this->once())->method('setPath')->with('customer/account/logout')->willReturnSelf();
        $request->expects($this->once())->method('isAjax')->willReturn(true);
        $this->resultFactory->expects($this->at(1))
            ->method('create')
            ->with(ResultFactory::TYPE_JSON)
            ->willReturn($redirect);
        $this->urlBuilder->expects($this->once())
            ->method('getUrl')
            ->with('customer/account/logout')
            ->willReturn('http://example.com/customer/account/logout');
        $redirect->expects($this->once())
            ->method('setData')
            ->with(['backUrl' => 'http://example.com/customer/account/logout'])
            ->willReturnSelf();
        $this->assertEquals($redirect, $this->plugin->aroundDispatch($subject, $proceed, $request));
    }
}
