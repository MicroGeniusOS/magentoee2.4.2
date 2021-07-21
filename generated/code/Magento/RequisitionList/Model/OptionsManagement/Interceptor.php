<?php
namespace Magento\RequisitionList\Model\OptionsManagement;

/**
 * Interceptor class for @see \Magento\RequisitionList\Model\OptionsManagement
 */
class Interceptor extends \Magento\RequisitionList\Model\OptionsManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RequisitionList\Model\RequisitionListItem\OptionFactory $itemOptionFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\RequisitionList\Model\RequisitionList\Items $requisitionListItemRepository, \Magento\RequisitionList\Api\Data\RequisitionListItemInterfaceFactory $requisitionListItemFactory, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Framework\Serialize\JsonValidator $jsonValidator)
    {
        $this->___init();
        parent::__construct($itemOptionFactory, $productRepository, $requisitionListItemRepository, $requisitionListItemFactory, $serializer, $jsonValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions(\Magento\RequisitionList\Api\Data\RequisitionListItemInterface $item, ?\Magento\Catalog\Api\Data\ProductInterface $product = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions($item, $product);
    }
}
