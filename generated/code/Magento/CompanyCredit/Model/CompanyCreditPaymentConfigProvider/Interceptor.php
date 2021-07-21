<?php
namespace Magento\CompanyCredit\Model\CompanyCreditPaymentConfigProvider;

/**
 * Interceptor class for @see \Magento\CompanyCredit\Model\CompanyCreditPaymentConfigProvider
 */
class Interceptor extends \Magento\CompanyCredit\Model\CompanyCreditPaymentConfigProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Authorization\Model\UserContextInterface $userContext, \Magento\CompanyCredit\Api\CreditDataProviderInterface $creditDataProvider, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, \Magento\Framework\App\Action\Context $context, \Magento\CompanyCredit\Model\WebsiteCurrency $websiteCurrency, \Magento\CompanyCredit\Model\CreditCheckoutData $creditCheckoutData)
    {
        $this->___init();
        parent::__construct($userContext, $creditDataProvider, $quoteRepository, $companyRepository, $context, $websiteCurrency, $creditCheckoutData);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        return $pluginInfo ? $this->___callPlugins('getQuote', func_get_args(), $pluginInfo) : parent::getQuote();
    }
}
