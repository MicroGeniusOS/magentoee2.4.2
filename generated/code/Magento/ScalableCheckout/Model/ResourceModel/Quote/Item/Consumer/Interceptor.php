<?php
namespace Magento\ScalableCheckout\Model\ResourceModel\Quote\Item\Consumer;

/**
 * Interceptor class for @see \Magento\ScalableCheckout\Model\ResourceModel\Quote\Item\Consumer
 */
class Interceptor extends \Magento\ScalableCheckout\Model\ResourceModel\Quote\Item\Consumer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\ResourceModel\Quote\Item $itemResource, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($itemResource, $cartRepository, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function processMessage(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processMessage');
        return $pluginInfo ? $this->___callPlugins('processMessage', func_get_args(), $pluginInfo) : parent::processMessage($product);
    }
}
