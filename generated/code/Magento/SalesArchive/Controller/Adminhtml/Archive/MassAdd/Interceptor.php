<?php
namespace Magento\SalesArchive\Controller\Adminhtml\Archive\MassAdd;

/**
 * Interceptor class for @see \Magento\SalesArchive\Controller\Adminhtml\Archive\MassAdd
 */
class Interceptor extends \Magento\SalesArchive\Controller\Adminhtml\Archive\MassAdd implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\SalesArchive\Model\Archive $archiveModel, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $archiveModel, $collectionFactory);
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
