<?php
namespace Magento\CustomerSegment\Model\ResourceModel\Segment;

/**
 * Interceptor class for @see \Magento\CustomerSegment\Model\ResourceModel\Segment
 */
class Interceptor extends \Magento\CustomerSegment\Model\ResourceModel\Segment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\CustomerSegment\Model\ResourceModel\Helper $resourceHelper, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Quote\Model\ResourceModel\Quote $resourceQuote, \Magento\Quote\Model\QueryResolver $queryResolver, $connectionName = null, ?\Magento\CustomerSegment\Model\ResourceModel\Customer\LinksMatcher $customerLinksMatcher = null)
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $configShare, $dateTime, $resourceQuote, $queryResolver, $connectionName, $customerLinksMatcher);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteSegmentCustomers($segment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteSegmentCustomers');
        return $pluginInfo ? $this->___callPlugins('deleteSegmentCustomers', func_get_args(), $pluginInfo) : parent::deleteSegmentCustomers($segment);
    }

    /**
     * {@inheritdoc}
     */
    public function aggregateMatchedCustomers($segment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'aggregateMatchedCustomers');
        return $pluginInfo ? $this->___callPlugins('aggregateMatchedCustomers', func_get_args(), $pluginInfo) : parent::aggregateMatchedCustomers($segment);
    }
}
