<?php
namespace Magento\RequisitionList\Controller\Items\Add;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Items\Add
 */
class Interceptor extends \Magento\RequisitionList\Controller\Items\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\RequisitionList\Model\RequisitionListItem\SaveHandler $requisitionListItemSaveHandler, \Magento\RequisitionList\Model\RequisitionListProduct $requisitionListProduct, \Psr\Log\LoggerInterface $logger, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\Framework\Serialize\Serializer\Json $jsonHelper, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($resultFactory, $requestValidator, $requisitionListItemSaveHandler, $requisitionListProduct, $logger, $request, $messageManager, $requisitionListRepository, $jsonHelper, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
