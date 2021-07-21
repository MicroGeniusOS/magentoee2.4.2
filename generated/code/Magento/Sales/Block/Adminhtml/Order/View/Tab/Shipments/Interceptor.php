<?php
namespace Magento\Sales\Block\Adminhtml\Order\View\Tab\Shipments;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\View\Tab\Shipments
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\View\Tab\Shipments implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Registry $coreRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowTab');
        return $pluginInfo ? $this->___callPlugins('canShowTab', func_get_args(), $pluginInfo) : parent::canShowTab();
    }
}
