<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Logviewer;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Logviewer
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Logviewer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Dotdigitalgroup\Email\Helper\File $file, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $file, $data);
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
