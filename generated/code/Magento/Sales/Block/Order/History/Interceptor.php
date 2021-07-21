<?php
namespace Magento\Sales\Block\Order\History;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\History
 */
class Interceptor extends \Magento\Sales\Block\Order\History implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\Order\Config $orderConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $orderCollectionFactory, $customerSession, $orderConfig, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrders');
        return $pluginInfo ? $this->___callPlugins('getOrders', func_get_args(), $pluginInfo) : parent::getOrders();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyOrdersMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyOrdersMessage');
        return $pluginInfo ? $this->___callPlugins('getEmptyOrdersMessage', func_get_args(), $pluginInfo) : parent::getEmptyOrdersMessage();
    }
}
