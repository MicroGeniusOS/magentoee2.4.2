<?php
namespace Magento\RequisitionList\Controller\Item\CartValidation;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Item\CartValidation
 */
class Interceptor extends \Magento\RequisitionList\Controller\Item\CartValidation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RequisitionList\Model\RequisitionListProduct $requisitionListProduct, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \Psr\Log\LoggerInterface $logger, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurable, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($requisitionListProduct, $requestValidator, $request, $jsonResultFactory, $logger, $requisitionListRepository, $configurable, $messageManager);
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
