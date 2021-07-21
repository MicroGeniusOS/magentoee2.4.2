<?php
namespace Magento\CustomerBalanceGraphQl\Model\Resolver\GetCustomerStoreCreditHistory;

/**
 * Interceptor class for @see \Magento\CustomerBalanceGraphQl\Model\Resolver\GetCustomerStoreCreditHistory
 */
class Interceptor extends \Magento\CustomerBalanceGraphQl\Model\Resolver\GetCustomerStoreCreditHistory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CustomerBalance\Model\Balance\HistoryFactory $historyFactory, \Magento\CustomerBalance\Model\ResourceModel\Balance\History\CollectionFactory $collectionFactory, \Magento\CustomerBalance\Helper\Data $customerBalanceHelper)
    {
        $this->___init();
        parent::__construct($priceCurrency, $historyFactory, $collectionFactory, $customerBalanceHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
