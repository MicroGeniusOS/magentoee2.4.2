<?php
namespace Magento\PurchaseOrder\Controller\PurchaseOrder\PlaceOrder;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Controller\PurchaseOrder\PlaceOrder
 */
class Interceptor extends \Magento\PurchaseOrder\Controller\PurchaseOrder\PlaceOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Magento\PurchaseOrder\Model\Customer\Authorization $purchaseOrderActionAuth, \Magento\PurchaseOrder\Api\PurchaseOrderManagementInterface $purchaseOrderManagement, \Magento\PurchaseOrder\Api\PurchaseOrderRepositoryInterface $purchaseOrderRepository, \Magento\PurchaseOrder\Model\CommentManagement $commentManagement, ?\Magento\PurchaseOrder\Model\Payment\DeferredPaymentStrategy $deferredPaymentStrategy = null)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $purchaseOrderActionAuth, $purchaseOrderManagement, $purchaseOrderRepository, $commentManagement, $deferredPaymentStrategy);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
