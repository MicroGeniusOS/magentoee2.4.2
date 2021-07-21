<?php
namespace Magento\SalesRule\Model\Coupon\Quote\UpdateCouponUsages;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Coupon\Quote\UpdateCouponUsages
 */
class Interceptor extends \Magento\SalesRule\Model\Coupon\Quote\UpdateCouponUsages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesRule\Model\Coupon\Usage\Processor $couponUsageProcessor, \Magento\SalesRule\Model\Coupon\Usage\UpdateInfoFactory $updateInfoFactory)
    {
        $this->___init();
        parent::__construct($couponUsageProcessor, $updateInfoFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Quote\Api\Data\CartInterface $quote, bool $increment) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($quote, $increment);
    }
}
