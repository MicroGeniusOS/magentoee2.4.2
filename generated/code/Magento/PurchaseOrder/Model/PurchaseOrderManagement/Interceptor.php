<?php
namespace Magento\PurchaseOrder\Model\PurchaseOrderManagement;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Model\PurchaseOrderManagement
 */
class Interceptor extends \Magento\PurchaseOrder\Model\PurchaseOrderManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\MessageQueue\PublisherInterface $publisher, \Magento\PurchaseOrder\Model\PurchaseOrder\LogManagementInterface $purchaseOrderLogManagement, \Magento\PurchaseOrder\Api\PurchaseOrderRepositoryInterface $purchaseOrderRepository, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\PurchaseOrder\Model\Validator\ActionReady\ValidatorLocator $validatorLocator, \Psr\Log\LoggerInterface $logger, \Magento\PurchaseOrder\Model\Notification\NotifierInterface $notifier, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderEmailSender, \Magento\NegotiableQuote\Api\NegotiableQuoteRepositoryInterface $negotiableQuoteRepository, \Magento\NegotiableQuote\Model\Quote\History $negotiableQuoteHistory, ?\Magento\PurchaseOrder\Model\Payment\DeferredPaymentStrategyInterface $deferredPaymentStrategy = null)
    {
        $this->___init();
        parent::__construct($publisher, $purchaseOrderLogManagement, $purchaseOrderRepository, $quoteRepository, $cartManagement, $storeManager, $orderRepository, $validatorLocator, $logger, $notifier, $orderEmailSender, $negotiableQuoteRepository, $negotiableQuoteHistory, $deferredPaymentStrategy);
    }

    /**
     * {@inheritdoc}
     */
    public function rejectPurchaseOrder(\Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface $purchaseOrder, $actorId = null) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rejectPurchaseOrder');
        $pluginInfo ? $this->___callPlugins('rejectPurchaseOrder', func_get_args(), $pluginInfo) : parent::rejectPurchaseOrder($purchaseOrder, $actorId);
    }
}
