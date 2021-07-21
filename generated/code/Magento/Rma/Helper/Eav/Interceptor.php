<?php
namespace Magento\Rma\Helper\Eav;

/**
 * Interceptor class for @see \Magento\Rma\Helper\Eav
 */
class Interceptor extends \Magento\Rma\Helper\Eav implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Eav\Model\Entity\Attribute\Config $attributeConfig, \Magento\Eav\Model\Config $eavConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $collectionFactory, \Magento\Framework\App\ResourceConnection $resource)
    {
        $this->___init();
        parent::__construct($context, $attributeConfig, $eavConfig, $storeManager, $collectionFactory, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptionValues($attributeCode, $storeId = null, $useDefaultValue = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeOptionValues');
        return $pluginInfo ? $this->___callPlugins('getAttributeOptionValues', func_get_args(), $pluginInfo) : parent::getAttributeOptionValues($attributeCode, $storeId, $useDefaultValue);
    }
}
