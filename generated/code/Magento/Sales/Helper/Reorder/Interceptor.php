<?php
namespace Magento\Sales\Helper\Reorder;

/**
 * Interceptor class for @see \Magento\Sales\Helper\Reorder
 */
class Interceptor extends \Magento\Sales\Helper\Reorder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $orderRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function canReorder($orderId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReorder');
        return $pluginInfo ? $this->___callPlugins('canReorder', func_get_args(), $pluginInfo) : parent::canReorder($orderId);
    }
}
