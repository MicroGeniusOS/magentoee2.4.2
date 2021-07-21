<?php
namespace Magento\Quote\Model\Product\QuoteItemsCleaner;

/**
 * Interceptor class for @see \Magento\Quote\Model\Product\QuoteItemsCleaner
 */
class Interceptor extends \Magento\Quote\Model\Product\QuoteItemsCleaner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\ResourceModel\Quote\Item $itemResource)
    {
        $this->___init();
        parent::__construct($itemResource);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($product);
    }
}
