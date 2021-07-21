<?php
namespace Magento\Review\Block\Adminhtml\Rating\Edit;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Rating\Edit
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Rating\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ratingFactory, $registry, $data);
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
