<?php
namespace Dotdigitalgroup\Email\Model\Product\TierPriceFinder;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Product\TierPriceFinder
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Product\TierPriceFinder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getTierPrices($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTierPrices');
        return $pluginInfo ? $this->___callPlugins('getTierPrices', func_get_args(), $pluginInfo) : parent::getTierPrices($product);
    }
}
