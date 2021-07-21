<?php
namespace Magento\Sales\Model\Order\InvoiceQuantityValidator;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\InvoiceQuantityValidator
 */
class Interceptor extends \Magento\Sales\Model\Order\InvoiceQuantityValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\OrderRepositoryInterface $orderRepository)
    {
        $this->___init();
        parent::__construct($orderRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($invoice);
    }
}
