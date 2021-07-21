<?php
namespace Dotdigitalgroup\Email\Model\Apiconnector\Customer;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Apiconnector\Customer
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Apiconnector\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product $productResource, \Magento\Catalog\Model\ResourceModel\Category $categoryResource, \Magento\Customer\Model\ResourceModel\Group $groupResource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Customer\Model\GroupFactory $groupFactory, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Catalog\Api\Data\CategoryInterfaceFactory $categoryFactory, \Magento\Catalog\Api\Data\ProductInterfaceFactory $productFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Sales\Model\ResourceModel\Order $resourceOrder, \Magento\Eav\Model\ConfigFactory $eavConfigFactory, \Dotdigitalgroup\Email\Helper\Config $configHelper, \Dotdigitalgroup\Email\Logger\Logger $logger, \Magento\Eav\Model\Config $eavConfig, \Dotdigitalgroup\Email\Model\Customer\DataField\Date $dateField, \Magento\Store\Model\App\Emulation $appEmulation)
    {
        $this->___init();
        parent::__construct($productResource, $categoryResource, $groupResource, $storeManager, $reviewCollectionFactory, $collectionFactory, $groupFactory, $subscriberFactory, $categoryFactory, $productFactory, $orderFactory, $resourceOrder, $eavConfigFactory, $configHelper, $logger, $eavConfig, $dateField, $appEmulation);
    }

    /**
     * {@inheritdoc}
     */
    public function setContactData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContactData');
        return $pluginInfo ? $this->___callPlugins('setContactData', func_get_args(), $pluginInfo) : parent::setContactData();
    }
}
