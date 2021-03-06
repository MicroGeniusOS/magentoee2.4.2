<?php
namespace Magento\SalesRule\Model\Rule\Metadata\ValueProvider;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule\Metadata\ValueProvider
 */
class Interceptor extends \Magento\SalesRule\Model\Rule\Metadata\ValueProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\System\Store $store, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Convert\DataObject $objectConverter, \Magento\SalesRule\Model\RuleFactory $salesRuleFactory, ?\Magento\SalesRule\Model\Rule\Action\SimpleActionOptionsProvider $simpleActionOptionsProvider = null)
    {
        $this->___init();
        parent::__construct($store, $groupRepository, $searchCriteriaBuilder, $objectConverter, $salesRuleFactory, $simpleActionOptionsProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataValues(\Magento\SalesRule\Model\Rule $rule)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadataValues');
        return $pluginInfo ? $this->___callPlugins('getMetadataValues', func_get_args(), $pluginInfo) : parent::getMetadataValues($rule);
    }
}
