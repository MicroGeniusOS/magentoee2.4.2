<?php
namespace Magento\CustomerFinance\Model\ResourceModel\Customer\Attribute\Finance\Collection;

/**
 * Interceptor class for @see \Magento\CustomerFinance\Model\ResourceModel\Customer\Attribute\Finance\Collection
 */
class Interceptor extends \Magento\CustomerFinance\Model\ResourceModel\Customer\Attribute\Finance\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\CustomerFinance\Helper\Data $customerFinanceData, \Magento\Eav\Model\AttributeFactory $attributeFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $customerFinanceData, $attributeFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
