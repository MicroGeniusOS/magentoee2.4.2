<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SharedCatalog\Test\Unit\Plugin\Catalog\Api;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;
use Magento\SharedCatalog\Model\ResourceModel\Permission;
use Magento\SharedCatalog\Plugin\Catalog\Api\DeleteSharedCatalogCategoryPermissionsPlugin;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Unit test for DeleteSharedCatalogCategoryPermissionsPlugin.
 */
class DeleteSharedCatalogCategoryPermissionsPluginTest extends TestCase
{
    /**
     * @var Permission|MockObject
     */
    private $sharedCatalogPermissionResource;

    /**
     * @var DeleteSharedCatalogCategoryPermissionsPlugin
     */
    private $deleteSharedCatalogCategoryPermissionsPlugin;

    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->sharedCatalogPermissionResource = $this
            ->getMockBuilder(Permission::class)
            ->disableOriginalConstructor()
            ->getMock();

        $objectManagerHelper = new ObjectManagerHelper($this);
        $this->deleteSharedCatalogCategoryPermissionsPlugin = $objectManagerHelper->getObject(
            DeleteSharedCatalogCategoryPermissionsPlugin::class,
            [
                'sharedCatalogPermissionResource' => $this->sharedCatalogPermissionResource,
            ]
        );
    }

    /**
     * Test for afterDelete().
     *
     * @return void
     */
    public function testAfterDelete()
    {
        $categoryId = 1;
        $categoryRepository = $this->getMockBuilder(CategoryRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $category = $this->getMockBuilder(CategoryInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $category->expects($this->atLeastOnce())->method('getId')->willReturn($categoryId);
        $this->sharedCatalogPermissionResource->expects($this->atLeastOnce())->method('deleteItems')->with($categoryId);

        $this->assertTrue(
            $this->deleteSharedCatalogCategoryPermissionsPlugin->afterDelete($categoryRepository, true, $category)
        );
    }
}
