<?php
namespace Magento\CompanyCreditGraphQl\Model\Resolver\Credit;

/**
 * Interceptor class for @see \Magento\CompanyCreditGraphQl\Model\Resolver\Credit
 */
class Interceptor extends \Magento\CompanyCreditGraphQl\Model\Resolver\Credit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyCredit\Api\CreditDataProviderInterface $creditDataProvider, \Magento\CompanyCredit\Model\PaymentMethodStatus $paymentMethodStatus, \Magento\CompanyCreditGraphQl\Model\Credit\Balance $balance, array $allowedResources = [])
    {
        $this->___init();
        parent::__construct($resolverAccess, $creditDataProvider, $paymentMethodStatus, $balance, $allowedResources);
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
