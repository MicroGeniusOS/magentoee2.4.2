<?php
namespace Magento\CustomerCustomAttributes\Block\Form;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Block\Form
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Block\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Collection\ModelFactory $modelFactory, \Magento\Eav\Model\Form\Factory $formFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Customer\Model\Metadata\FormFactory $metadataFormFactory, \Magento\Customer\Model\Session $customerSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $modelFactory, $formFactory, $eavConfig, $metadataFormFactory, $customerSession, $data);
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
