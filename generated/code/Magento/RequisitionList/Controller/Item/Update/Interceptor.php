<?php
namespace Magento\RequisitionList\Controller\Item\Update;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Item\Update
 */
class Interceptor extends \Magento\RequisitionList\Controller\Item\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\RequisitionList\Model\RequisitionList\Items $requisitionListItemRepository, \Psr\Log\LoggerInterface $logger, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($context, $requestValidator, $requisitionListRepository, $requisitionListItemRepository, $logger, $stockRegistry);
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
