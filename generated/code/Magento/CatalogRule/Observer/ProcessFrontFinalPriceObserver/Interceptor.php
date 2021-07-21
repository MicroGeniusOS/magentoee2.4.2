<?php
namespace Magento\CatalogRule\Observer\ProcessFrontFinalPriceObserver;

/**
 * Interceptor class for @see \Magento\CatalogRule\Observer\ProcessFrontFinalPriceObserver
 */
class Interceptor extends \Magento\CatalogRule\Observer\ProcessFrontFinalPriceObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogRule\Observer\RulePricesStorage $rulePricesStorage, \Magento\CatalogRule\Model\ResourceModel\RuleFactory $resourceRuleFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($rulePricesStorage, $resourceRuleFactory, $storeManager, $localeDate, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
