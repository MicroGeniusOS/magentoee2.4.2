<?php
namespace Magento\Rma\Block\Returns\Create;

/**
 * Interceptor class for @see \Magento\Rma\Block\Returns\Create
 */
class Interceptor extends \Magento\Rma\Block\Returns\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Collection\ModelFactory $modelFactory, \Magento\Eav\Model\Form\Factory $formFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Rma\Model\ItemFactory $itemFactory, \Magento\Rma\Model\Item\FormFactory $itemFormFactory, \Magento\Rma\Helper\Data $rmaData, \Magento\Framework\Registry $registry, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $modelFactory, $formFactory, $eavConfig, $itemFactory, $itemFormFactory, $rmaData, $registry, $addressRenderer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeHtml(\Magento\Eav\Model\Attribute $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeHtml');
        return $pluginInfo ? $this->___callPlugins('getAttributeHtml', func_get_args(), $pluginInfo) : parent::getAttributeHtml($attribute);
    }
}
