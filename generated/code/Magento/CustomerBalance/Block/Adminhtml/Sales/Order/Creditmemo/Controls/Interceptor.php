<?php
namespace Magento\CustomerBalance\Block\Adminhtml\Sales\Order\Creditmemo\Controls;

/**
 * Interceptor class for @see \Magento\CustomerBalance\Block\Adminhtml\Sales\Order\Creditmemo\Controls
 */
class Interceptor extends \Magento\CustomerBalance\Block\Adminhtml\Sales\Order\Creditmemo\Controls implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\CustomerBalance\Helper\Data $customerBalanceHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $customerBalanceHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function canRefundToCustomerBalance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefundToCustomerBalance');
        return $pluginInfo ? $this->___callPlugins('canRefundToCustomerBalance', func_get_args(), $pluginInfo) : parent::canRefundToCustomerBalance();
    }
}
