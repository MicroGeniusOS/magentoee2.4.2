<?php
namespace Magento\Rma\Block\Email\Items;

/**
 * Interceptor class for @see \Magento\Rma\Block\Email\Items
 */
class Interceptor extends \Magento\Rma\Block\Email\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Collection\ModelFactory $modelFactory, \Magento\Eav\Model\Form\Factory $formFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Rma\Helper\Eav $rmaEav, array $data = [], ?\Magento\Rma\Api\RmaRepositoryInterface $rmaRepository = null)
    {
        $this->___init();
        parent::__construct($context, $modelFactory, $formFactory, $eavConfig, $rmaEav, $data, $rmaRepository);
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
