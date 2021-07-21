<?php
namespace Magento\CompanyCreditGraphQl\Model\Resolver\CreditHistory;

/**
 * Interceptor class for @see \Magento\CompanyCreditGraphQl\Model\Resolver\CreditHistory
 */
class Interceptor extends \Magento\CompanyCreditGraphQl\Model\Resolver\CreditHistory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory, \Magento\CompanyCreditGraphQl\Model\CreditHistory $creditHistory, \Magento\CompanyCreditGraphQl\Model\Credit\OperationExtractor $operationExtractor, \Magento\CompanyCreditGraphQl\Model\History\User $historyUser, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyCredit\Model\PaymentMethodStatus $paymentMethodStatus, \Magento\CompanyCreditGraphQl\Model\Credit\HistoryType $historyType, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($searchCriteriaBuilderFactory, $creditHistory, $operationExtractor, $historyUser, $resolverAccess, $paymentMethodStatus, $historyType, $allowedResources);
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
