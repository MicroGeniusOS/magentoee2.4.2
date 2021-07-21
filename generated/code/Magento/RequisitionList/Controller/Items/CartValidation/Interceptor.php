<?php
namespace Magento\RequisitionList\Controller\Items\CartValidation;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Items\CartValidation
 */
class Interceptor extends \Magento\RequisitionList\Controller\Items\CartValidation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\Framework\App\RequestInterface $request, \Magento\RequisitionList\Api\RequisitionListRepositoryInterface $requisitionListRepository, \Magento\RequisitionList\Model\RequisitionListProduct $requisitionListProduct, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurable, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($jsonResultFactory, $requestValidator, $request, $requisitionListRepository, $requisitionListProduct, $configurable, $logger, $messageManager);
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
