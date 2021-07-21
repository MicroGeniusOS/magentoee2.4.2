<?php
namespace Magento\Catalog\Model\ResourceModel\Product\CategoryLink;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Product\CategoryLink
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Product\CategoryLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($metadataPool, $resourceConnection);
    }

    /**
     * {@inheritdoc}
     */
    public function updateCategoryLinks(\Magento\Catalog\Api\Data\ProductInterface $product, array $insertLinks, $insert = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateCategoryLinks');
        return $pluginInfo ? $this->___callPlugins('updateCategoryLinks', func_get_args(), $pluginInfo) : parent::updateCategoryLinks($product, $insertLinks, $insert);
    }
}
