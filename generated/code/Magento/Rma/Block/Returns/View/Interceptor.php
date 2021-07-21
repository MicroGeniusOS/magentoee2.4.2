<?php
namespace Magento\Rma\Block\Returns\View;

/**
 * Interceptor class for @see \Magento\Rma\Block\Returns\View
 */
class Interceptor extends \Magento\Rma\Block\Returns\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Collection\ModelFactory $modelFactory, \Magento\Eav\Model\Form\Factory $formFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Rma\Model\ResourceModel\Item\CollectionFactory $itemsFactory, \Magento\Rma\Model\ResourceModel\Rma\Status\History\CollectionFactory $historiesFactory, \Magento\Rma\Model\ItemFactory $itemFactory, \Magento\Rma\Model\Item\FormFactory $itemFormFactory, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Customer\Helper\View $customerView, \Magento\Framework\App\Http\Context $httpContext, \Magento\Rma\Helper\Data $rmaData, \Magento\Framework\Registry $registry, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $modelFactory, $formFactory, $eavConfig, $itemsFactory, $historiesFactory, $itemFactory, $itemFormFactory, $currentCustomer, $customerView, $httpContext, $rmaData, $registry, $customerRepository, $data);
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
