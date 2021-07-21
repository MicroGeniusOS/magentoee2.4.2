<?php
namespace Magento\NegotiableQuote\Controller\Adminhtml\Quote\Save;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Adminhtml\Quote\Save
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Adminhtml\Quote\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\NegotiableQuote\Model\CommentManagement $commentManagement, \Magento\NegotiableQuote\Model\ResourceModel\CommentAttachment $commentAttachmentResource, \Magento\NegotiableQuote\Api\Data\CommentAttachmentInterfaceFactory $attachmentInterfaceFactory, \Magento\NegotiableQuote\Controller\FileProcessor $fileProcessor)
    {
        $this->___init();
        parent::__construct($context, $logger, $quoteRepository, $negotiableQuoteManagement, $commentManagement, $commentAttachmentResource, $attachmentInterfaceFactory, $fileProcessor);
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
