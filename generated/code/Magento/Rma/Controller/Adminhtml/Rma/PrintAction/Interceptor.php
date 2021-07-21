<?php
namespace Magento\Rma\Controller\Adminhtml\Rma\PrintAction;

/**
 * Interceptor class for @see \Magento\Rma\Controller\Adminhtml\Rma\PrintAction
 */
class Interceptor extends \Magento\Rma\Controller\Adminhtml\Rma\PrintAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Shipping\Helper\Carrier $carrierHelper, \Magento\Rma\Model\Shipping\LabelService $labelService, \Magento\Rma\Model\Rma\RmaDataMapper $rmaDataMapper, ?\Magento\Rma\Api\RmaRepositoryInterface $rmaRepository = null, ?\Magento\Rma\Model\Pdf\RmaFactory $rmaPdfFactory = null, ?\Magento\Framework\Stdlib\DateTime\DateTime $dateTime = null, ?\Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $filesystem, $carrierHelper, $labelService, $rmaDataMapper, $rmaRepository, $rmaPdfFactory, $dateTime, $resultForwardFactory);
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
