<?php
namespace Magento\CustomerSegment\Model\Segment;

/**
 * Interceptor class for @see \Magento\CustomerSegment\Model\Segment
 */
class Interceptor extends \Magento\CustomerSegment\Model\Segment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Rule\Model\Action\CollectionFactory $collectionFactory, \Magento\Customer\Model\Visitor $visitor, \Magento\Customer\Model\VisitorFactory $visitorFactory, \Magento\CustomerSegment\Model\ConditionFactory $conditionFactory, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\CustomerSegment\Model\SegmentMatchPublisher $publisher = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $localeDate, $storeManager, $collectionFactory, $visitor, $visitorFactory, $conditionFactory, $resource, $resourceCollection, $data, $publisher);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }
}
