<?php
namespace Magento\RequisitionList\Controller\Item\Add;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Item\Add
 */
class Interceptor extends \Magento\RequisitionList\Controller\Item\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\RequisitionList\Model\RequisitionListItem\SaveHandler $requisitionListItemSaveHandler, \Magento\RequisitionList\Model\RequisitionListProduct $requisitionListProduct, \Psr\Log\LoggerInterface $logger, \Magento\RequisitionList\Model\RequisitionListItem\Locator $requisitionListItemLocator, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $requestValidator, $requisitionListItemSaveHandler, $requisitionListProduct, $logger, $requisitionListItemLocator, $requisitionListRepository, $urlBuilder);
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
