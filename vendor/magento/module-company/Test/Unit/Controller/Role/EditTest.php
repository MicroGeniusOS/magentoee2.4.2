<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Company\Test\Unit\Controller\Role;

use Magento\Company\Controller\Role\Edit;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ViewInterface;
use Magento\Framework\Phrase;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Framework\View\Page\Title;
use Magento\Framework\View\Result\Page;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class EditTest extends TestCase
{
    /**
     * @var ViewInterface|MockObject
     */
    private $view;

    /**
     * @var ViewInterface|MockObject
     */
    private $request;

    /**
     * @var Edit
     */
    private $controller;

    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->view = $this->getMockBuilder(ViewInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['loadLayout', 'loadLayoutUpdates', 'getPage', 'renderLayout'])
            ->getMockForAbstractClass();
        $this->request = $this->getMockBuilder(RequestInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getParam'])
            ->getMockForAbstractClass();

        $objectManager = new ObjectManager($this);
        $this->controller = $objectManager->getObject(
            Edit::class,
            [
                '_view' => $this->view,
                '_request' => $this->request,
            ]
        );
    }

    /**
     * Test execute method.
     *
     * @return void
     */
    public function testExecute()
    {
        $phrase = new Phrase('Add New Role');
        $editRolePhrase = new Phrase('Edit Role');
        $resultPage = $this->createPartialMock(
            Page::class,
            ['getConfig']
        );
        $resultConfig = $this->getMockBuilder(Page::class)
            ->addMethods(['getTitle'])
            ->disableOriginalConstructor()
            ->getMock();
        $resultTitle = $this->createPartialMock(
            Title::class,
            ['set']
        );
        $this->view->expects($this->once())
            ->method('loadLayout')
            ->willReturnSelf();
        $this->view->expects($this->once())
            ->method('loadLayoutUpdates')
            ->willReturnSelf();
        $this->request->expects($this->once())->method('getParam')->with('id')->willReturn(1);
        $this->view->expects($this->exactly(2))
            ->method('getPage')
            ->willReturn($resultPage);
        $resultPage->expects($this->exactly(2))->method('getConfig')->willReturn($resultConfig);
        $resultConfig->expects($this->exactly(2))->method('getTitle')->willReturn($resultTitle);
        $resultTitle->expects($this->exactly(2))
            ->method('set')
            ->withConsecutive([$phrase], [$editRolePhrase])
            ->willReturnSelf();
        $this->view->expects($this->once())
            ->method('renderLayout')
            ->willReturnSelf();

        $this->controller->execute();
    }
}
