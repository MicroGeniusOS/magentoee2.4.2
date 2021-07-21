<?php
namespace Magento\CompanyPayment\Model\Payment\Checks\CanUseForCompany;

/**
 * Interceptor class for @see \Magento\CompanyPayment\Model\Payment\Checks\CanUseForCompany
 */
class Interceptor extends \Magento\CompanyPayment\Model\Payment\Checks\CanUseForCompany implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Api\CompanyManagementInterface $companyManagement, \Magento\CompanyPayment\Model\Payment\AvailabilityChecker $availabilityChecker)
    {
        $this->___init();
        parent::__construct($companyManagement, $availabilityChecker);
    }

    /**
     * {@inheritdoc}
     */
    public function isApplicable(\Magento\Payment\Model\MethodInterface $paymentMethod, \Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isApplicable');
        return $pluginInfo ? $this->___callPlugins('isApplicable', func_get_args(), $pluginInfo) : parent::isApplicable($paymentMethod, $quote);
    }
}
