<?php
namespace Magento\PurchaseOrder\Model\Notification\Email\ContentSource\ApprovalRequiredAction;

/**
 * Interceptor class for @see \Magento\PurchaseOrder\Model\Notification\Email\ContentSource\ApprovalRequiredAction
 */
class Interceptor extends \Magento\PurchaseOrder\Model\Notification\Email\ContentSource\ApprovalRequiredAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PurchaseOrder\Api\Data\PurchaseOrderInterface $purchaseOrder, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\NegotiableQuote\Api\NegotiableQuoteRepositoryInterface $negotiableQuoteRepository, \Magento\Company\Model\Company\Structure $structure, int $recipientId)
    {
        $this->___init();
        parent::__construct($purchaseOrder, $customerRepository, $negotiableQuoteRepository, $structure, $recipientId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateVars() : \Magento\Framework\DataObject
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateVars');
        return $pluginInfo ? $this->___callPlugins('getTemplateVars', func_get_args(), $pluginInfo) : parent::getTemplateVars();
    }
}
