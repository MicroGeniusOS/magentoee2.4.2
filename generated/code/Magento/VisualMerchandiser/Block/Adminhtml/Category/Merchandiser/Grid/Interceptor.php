<?php
namespace Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser\Grid;

/**
 * Interceptor class for @see \Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser\Grid
 */
class Interceptor extends \Magento\VisualMerchandiser\Block\Adminhtml\Category\Merchandiser\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\Registry $coreRegistry, \Magento\VisualMerchandiser\Model\Category\Products $products, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $coreRegistry, $products, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumn($columnId, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumn');
        return $pluginInfo ? $this->___callPlugins('addColumn', func_get_args(), $pluginInfo) : parent::addColumn($columnId, $column);
    }
}
