<?php
namespace Magento\RequisitionList\Controller\Item\Copy\FromOrder;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Item\Copy\FromOrder
 */
class Interceptor extends \Magento\RequisitionList\Controller\Item\Copy\FromOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\RequisitionList\Model\RequisitionList\Order\Converter $converter)
    {
        $this->___init();
        parent::__construct($context, $requestValidator, $orderRepository, $requisitionListRepository, $converter);
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
