<?php
namespace Magento\Quote\Model\Quote\ShippingAssignment\ShippingAssignmentPersister;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\ShippingAssignment\ShippingAssignmentPersister
 */
class Interceptor extends \Magento\Quote\Model\Quote\ShippingAssignment\ShippingAssignmentPersister implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\Quote\ShippingAssignment\ShippingAssignmentProcessor $shippingAssignmentProcessor)
    {
        $this->___init();
        parent::__construct($shippingAssignmentProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote, \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($quote, $shippingAssignment);
    }
}
