<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Multistore;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Multistore
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Multistore implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null, ?\Magento\Directory\Helper\Data $directoryHelper = null)
    {
        $this->___init();
        parent::__construct($context, $data, $jsonHelper, $directoryHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getRenderer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRenderer');
        return $pluginInfo ? $this->___callPlugins('getRenderer', func_get_args(), $pluginInfo) : parent::getRenderer();
    }
}
