<?php
namespace Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface;

/**
 * Proxy class for @see \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface
 */
class Proxy implements \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\NegotiableQuote\\Api\\NegotiableQuoteManagementInterface', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function close($quoteId, $force = false)
    {
        return $this->_getSubject()->close($quoteId, $force);
    }

    /**
     * {@inheritdoc}
     */
    public function openByMerchant($quoteId)
    {
        return $this->_getSubject()->openByMerchant($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function send($quoteId, $comment = '', array $files = [])
    {
        return $this->_getSubject()->send($quoteId, $comment, $files);
    }

    /**
     * {@inheritdoc}
     */
    public function adminSend($quoteId, $comment = '', array $files = [])
    {
        return $this->_getSubject()->adminSend($quoteId, $comment, $files);
    }

    /**
     * {@inheritdoc}
     */
    public function updateProcessingByCustomerQuoteStatus($quoteId, $needSave = true)
    {
        return $this->_getSubject()->updateProcessingByCustomerQuoteStatus($quoteId, $needSave);
    }

    /**
     * {@inheritdoc}
     */
    public function saveAsDraft($quoteId, array $quoteData, array $commentData = [])
    {
        return $this->_getSubject()->saveAsDraft($quoteId, $quoteData, $commentData);
    }

    /**
     * {@inheritdoc}
     */
    public function create($quoteId, $quoteName, $comment = '', array $files = [])
    {
        return $this->_getSubject()->create($quoteId, $quoteName, $comment, $files);
    }

    /**
     * {@inheritdoc}
     */
    public function decline($quoteId, $reason)
    {
        return $this->_getSubject()->decline($quoteId, $reason);
    }

    /**
     * {@inheritdoc}
     */
    public function order($quoteId)
    {
        return $this->_getSubject()->order($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getNegotiableQuote($quoteId)
    {
        return $this->_getSubject()->getNegotiableQuote($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function removeQuoteItem($quoteId, $itemId)
    {
        return $this->_getSubject()->removeQuoteItem($quoteId, $itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function setHasChangesInNegotiableQuote(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        return $this->_getSubject()->setHasChangesInNegotiableQuote($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getSnapshotQuote($quoteId)
    {
        return $this->_getSubject()->getSnapshotQuote($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function removeNegotiation($quoteId)
    {
        return $this->_getSubject()->removeNegotiation($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function recalculateQuote($quoteId, $updatePrice = true)
    {
        return $this->_getSubject()->recalculateQuote($quoteId, $updatePrice);
    }

    /**
     * {@inheritdoc}
     */
    public function updateQuoteItems($quoteId, array $cartData = [])
    {
        return $this->_getSubject()->updateQuoteItems($quoteId, $cartData);
    }
}
