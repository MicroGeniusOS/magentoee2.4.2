<?php
namespace Magento\NegotiableQuote\Model\History\SnapshotManagement;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\History\SnapshotManagement
 */
class Interceptor extends \Magento\NegotiableQuote\Model\History\SnapshotManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Model\History\DiffProcessor $diffProcessor, \Magento\NegotiableQuote\Model\History\SnapshotInformationManagement $snapshotInformationManagement)
    {
        $this->___init();
        parent::__construct($quoteRepository, $diffProcessor, $snapshotInformationManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId(\Magento\Quote\Api\Data\CartInterface $quote, $isSeller, $isExpired)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerId');
        return $pluginInfo ? $this->___callPlugins('getCustomerId', func_get_args(), $pluginInfo) : parent::getCustomerId($quote, $isSeller, $isExpired);
    }
}
