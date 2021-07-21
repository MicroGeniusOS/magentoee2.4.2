<?php
namespace Magento\RequisitionList\Controller\Requisition\Export;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Requisition\Export
 */
class Interceptor extends \Magento\RequisitionList\Controller\Requisition\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\Backend\App\Response\Http\FileFactory $fileFactory, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\RequisitionList\Model\RequisitionList\ItemSelector $requisitionListItemSelector, \Magento\RequisitionList\Model\Export\RequisitionList $requisitionListExport)
    {
        $this->___init();
        parent::__construct($context, $requestValidator, $fileFactory, $requisitionListRepository, $requisitionListItemSelector, $requisitionListExport);
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
