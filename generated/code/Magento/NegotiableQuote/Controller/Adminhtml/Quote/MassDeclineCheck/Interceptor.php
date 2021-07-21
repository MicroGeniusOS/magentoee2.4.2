<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\MassDeclineCheck;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\MassDeclineCheck
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\MassDeclineCheck implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\NegotiableQuote\Model\ResourceModel\Quote\CollectionFactory $collectionFactory, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Model\Restriction\RestrictionInterface $restriction)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $negotiableQuoteManagement, $resultJsonFactory, $quoteRepository, $restriction);
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
