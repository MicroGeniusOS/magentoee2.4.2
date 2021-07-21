<?php
namespace Magento\Sales\Model\Order\InvoiceDocumentFactory;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\InvoiceDocumentFactory
 */
class Interceptor extends \Magento\Sales\Model\Order\InvoiceDocumentFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Service\InvoiceService $invoiceService)
    {
        $this->___init();
        parent::__construct($invoiceService);
    }

    /**
     * {@inheritdoc}
     */
    public function create(\Magento\Sales\Api\Data\OrderInterface $order, $items = [], ?\Magento\Sales\Api\Data\InvoiceCommentCreationInterface $comment = null, $appendComment = false, ?\Magento\Sales\Api\Data\InvoiceCreationArgumentsInterface $arguments = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($order, $items, $comment, $appendComment, $arguments);
    }
}
