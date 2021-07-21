<?php
namespace Magento\Rma\Model\ResourceModel\Item;

/**
 * Interceptor class for @see \Magento\Rma\Model\ResourceModel\Item
 */
class Interceptor extends \Magento\Rma\Model\ResourceModel\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Rma\Helper\Data $rmaData, \Magento\Rma\Model\ResourceModel\Order\Item\CollectionFactory $ordersFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ProductTypes\ConfigInterface $refundableList, \Magento\Sales\Model\Order\Admin\Item $adminOrderItem, $data = [], ?\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($context, $rmaData, $ordersFactory, $productFactory, $refundableList, $adminOrderItem, $data, $productCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }
}
