<?php
namespace Magento\Customer\Model\Customer\Attribute\Source\Group;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\Attribute\Source\Group
 */
class Interceptor extends \Magento\Customer\Model\Customer\Attribute\Source\Group implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\Convert\DataObject $converter)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $groupManagement, $converter);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions($withEmpty = true, $defaultValues = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOptions');
        return $pluginInfo ? $this->___callPlugins('getAllOptions', func_get_args(), $pluginInfo) : parent::getAllOptions($withEmpty, $defaultValues);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
