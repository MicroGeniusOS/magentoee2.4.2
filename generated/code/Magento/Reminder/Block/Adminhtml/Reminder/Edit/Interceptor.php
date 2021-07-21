<?php
namespace Magento\Reminder\Block\Adminhtml\Reminder\Edit;

/**
 * Interceptor class for @see \Magento\Reminder\Block\Adminhtml\Reminder\Edit
 */
class Interceptor extends \Magento\Reminder\Block\Adminhtml\Reminder\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Reminder\Helper\Data $reminderData, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $reminderData, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
