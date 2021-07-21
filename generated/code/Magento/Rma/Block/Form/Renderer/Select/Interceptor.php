<?php
namespace Magento\Rma\Block\Form\Renderer\Select;

/**
 * Interceptor class for @see \Magento\Rma\Block\Form\Renderer\Select
 */
class Interceptor extends \Magento\Rma\Block\Form\Renderer\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Rma\Model\ItemFactory $itemFactory, \Magento\Rma\Model\Item\FormFactory $itemFormFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $itemFactory, $itemFormFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions();
    }
}
