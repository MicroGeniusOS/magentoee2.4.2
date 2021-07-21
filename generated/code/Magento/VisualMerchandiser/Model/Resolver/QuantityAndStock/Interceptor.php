<?php
namespace Magento\VisualMerchandiser\Model\Resolver\QuantityAndStock;

/**
 * Interceptor class for @see \Magento\VisualMerchandiser\Model\Resolver\QuantityAndStock
 */
class Interceptor extends \Magento\VisualMerchandiser\Model\Resolver\QuantityAndStock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context)
    {
        $this->___init();
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    public function joinStock(\Magento\Catalog\Model\ResourceModel\Product\Collection $collection) : \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinStock');
        return $pluginInfo ? $this->___callPlugins('joinStock', func_get_args(), $pluginInfo) : parent::joinStock($collection);
    }
}
