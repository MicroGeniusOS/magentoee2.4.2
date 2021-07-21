<?php
namespace Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser;

/**
 * Interceptor class for @see \Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser
 */
class Interceptor extends \Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\VisualMerchandiser\Model\Position\Cache $cache, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $cache, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
