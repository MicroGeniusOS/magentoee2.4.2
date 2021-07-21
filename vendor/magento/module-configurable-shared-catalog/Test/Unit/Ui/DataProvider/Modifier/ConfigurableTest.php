<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ConfigurableSharedCatalog\Test\Unit\Ui\DataProvider\Modifier;

use Magento\Catalog\Api\Data\ProductExtensionInterface;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\ConfigurableSharedCatalog\Ui\DataProvider\Modifier\Configurable;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\EntityManager\EntityMetadataInterface;
use Magento\Framework\EntityManager\MetadataPool;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\SharedCatalog\Model\Form\Storage\PriceCalculator;
use Magento\SharedCatalog\Model\Form\Storage\UrlBuilder;
use Magento\SharedCatalog\Model\Form\Storage\Wizard;
use Magento\SharedCatalog\Model\Form\Storage\WizardFactory;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Test for Configurable modifier.
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ConfigurableTest extends TestCase
{
    /**
     * @var ProductRepositoryInterface|MockObject
     */
    private $productRepository;

    /**
     * @var WizardFactory|MockObject
     */
    private $storageFactory;

    /**
     * @var Wizard|MockObject
     */
    private $wizardStorage;

    /**
     * @var PriceCalculator|MockObject
     */
    private $priceCalculator;

    /**
     * @var MetadataPool|MockObject
     */
    private $metadataPool;

    /**
     * @var RequestInterface|MockObject
     */
    private $request;

    /**
     * @var Configurable
     */
    private $modifier;

    /**
     * Set up for test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->productRepository = $this->getMockBuilder(ProductRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->storageFactory = $this->getMockBuilder(WizardFactory::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $this->wizardStorage = $this->getMockBuilder(Wizard::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->priceCalculator = $this->getMockBuilder(PriceCalculator::class)
            ->disableOriginalConstructor()
            ->setMethods(['calculateNewPriceForProduct'])
            ->getMock();
        $this->metadataPool = $this->getMockBuilder(MetadataPool::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->request = $this->getMockBuilder(RequestInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $objectManager = new ObjectManager($this);
        $this->modifier = $objectManager->getObject(
            Configurable::class,
            [
                'productRepository' => $this->productRepository,
                'storageFactory' => $this->storageFactory,
                'priceCalculator' => $this->priceCalculator,
                'metadataPool' => $this->metadataPool,
                'request' => $this->request
            ]
        );
    }

    /**
     * Test modifyData method.
     *
     * @param array $result
     * @param array $childs
     * @return void
     * @dataProvider modifyDataDataProvider
     */
    public function testModifyData(array $result, array $childs)
    {
        $this->request->expects($this->atLeastOnce())->method('getParam')
            ->with(UrlBuilder::REQUEST_PARAM_CONFIGURE_KEY)
            ->willReturn('configure_key');
        $data = [
            'entity_id' => 1,
            'website_id' => 1,
        ];
        $linkProductSku = 'SKU1';
        $configurableProductLinks = [2, 3];
        $product = $this->getMockBuilder(ProductInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getExtensionAttributes'])
            ->getMockForAbstractClass();
        $extensionAttribute = $this->getMockBuilder(ProductExtensionInterface::class)
            ->setMethods(['getConfigurableProductLinks'])
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $entity = $this->getMockBuilder(EntityMetadataInterface::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $this->metadataPool->expects($this->once())
            ->method('getMetadata')
            ->with(ProductInterface::class)
            ->willReturn($entity);
        $entity->expects($this->once())->method('getIdentifierField')->willReturn('entity_id');
        $product->expects($this->atLeastOnce())->method('getExtensionAttributes')->willReturn($extensionAttribute);
        $extensionAttribute->expects($this->atLeastOnce())
            ->method('getConfigurableProductLinks')
            ->willReturn($configurableProductLinks);
        $this->productRepository->expects($this->at(0))->method('getById')->with(1)->willReturn($product);
        foreach ($childs as $key => $child) {
            $linkProduct = $this->getMockBuilder(ProductInterface::class)
                ->setMethods(['getId', 'getPrice'])
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
            $this->wizardStorage->expects($this->at($key))
                ->method('isProductAssigned')
                ->with($linkProductSku)
                ->willReturn(true);
            $this->priceCalculator->expects($this->at($key))
                ->method('calculateNewPriceForProduct')
                ->willReturn($child['new_price']);
            $linkProduct->expects($this->atLeastOnce())->method('getSku')->willReturn($linkProductSku);
            $linkProduct->expects($this->atLeastOnce())->method('getPrice')->willReturn($child['price']);
            $this->productRepository->expects($this->at($key + 1))
                ->method('getById')->with($child['entity_id'])
                ->willReturn($linkProduct);
        }
        $this->storageFactory->expects($this->atLeastOnce())
            ->method('create')
            ->with(['key' => 'configure_key'])
            ->willReturn($this->wizardStorage);

        $this->assertSame($result, $this->modifier->modifyData($data));
    }

    /**
     * Data provider for modifyData method.
     *
     * @return array
     */
    public function modifyDataDataProvider()
    {
        return [
            [
                [
                    'entity_id' => 1,
                    'website_id' => 1,
                    'price' => 120,
                    'new_price' => 125,
                ],
                [
                    [
                        'entity_id' => 2,
                        'price' => 120,
                        'new_price' => 125,
                    ],
                    [
                        'entity_id' => 3,
                        'price' => 140,
                        'new_price' => 145,
                    ]
                ],
            ],
            [
                [
                    'entity_id' => 1,
                    'website_id' => 1,
                    'price' => 100,
                    'new_price' => 10,
                ],
                [
                    [
                        'entity_id' => 2,
                        'price' => 200,
                        'new_price' => 10,
                    ],
                    [
                        'entity_id' => 3,
                        'price' => 100,
                        'new_price' => 20,
                    ]
                ],
            ],
        ];
    }

    /**
     * Test modifyMeta method.
     *
     * @return void
     */
    public function testModifyMeta()
    {
        $data = ['modifyMeta'];
        $this->assertEquals($data, $this->modifier->modifyMeta($data));
    }
}
