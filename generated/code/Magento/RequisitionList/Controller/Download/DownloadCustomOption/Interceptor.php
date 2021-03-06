<?php
namespace Magento\RequisitionList\Controller\Download\DownloadCustomOption;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Download\DownloadCustomOption
 */
class Interceptor extends \Magento\RequisitionList\Controller\Download\DownloadCustomOption implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\RequisitionList\Model\Checker\RequisitionListItemOptionAvailability $optionChecker, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\RequisitionList\Model\RequisitionList\Items $requisitionListItems)
    {
        $this->___init();
        parent::__construct($context, $serializer, $optionChecker, $fileFactory, $requisitionListItems);
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
