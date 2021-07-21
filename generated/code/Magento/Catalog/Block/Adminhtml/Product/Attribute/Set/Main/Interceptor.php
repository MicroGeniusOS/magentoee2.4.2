<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Main;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Main
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Eav\Model\Entity\TypeFactory $typeFactory, \Magento\Eav\Model\Entity\Attribute\GroupFactory $groupFactory, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $collectionFactory, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\Entity\Product\Attribute\Group\AttributeMapperInterface $attributeMapper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $typeFactory, $groupFactory, $collectionFactory, $registry, $attributeMapper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }
}
