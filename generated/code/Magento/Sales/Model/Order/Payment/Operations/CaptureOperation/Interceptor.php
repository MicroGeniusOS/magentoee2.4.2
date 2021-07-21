<?php
namespace Magento\Sales\Model\Order\Payment\Operations\CaptureOperation;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Payment\Operations\CaptureOperation
 */
class Interceptor extends \Magento\Sales\Model\Order\Payment\Operations\CaptureOperation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Order\Payment\State\CommandInterface $stateCommand, \Magento\Sales\Model\Order\Payment\Transaction\BuilderInterface $transactionBuilder, \Magento\Sales\Model\Order\Payment\Transaction\ManagerInterface $transactionManager, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Sales\Model\Order\Payment\Operations\ProcessInvoiceOperation $processInvoiceOperation)
    {
        $this->___init();
        parent::__construct($stateCommand, $transactionBuilder, $transactionManager, $eventManager, $processInvoiceOperation);
    }

    /**
     * {@inheritdoc}
     */
    public function capture(\Magento\Sales\Api\Data\OrderPaymentInterface $payment, $invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture($payment, $invoice);
    }
}
