<?php
namespace Magento\CustomerSegment\Model\ResourceModel\Segment\Report\Detail\Group\Option;

/**
 * Interceptor class for @see \Magento\CustomerSegment\Model\ResourceModel\Segment\Report\Detail\Group\Option
 */
class Interceptor extends \Magento\CustomerSegment\Model\ResourceModel\Segment\Report\Detail\Group\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\ResourceModel\Group\Collection $groupCollection)
    {
        $this->___init();
        parent::__construct($groupCollection);
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
