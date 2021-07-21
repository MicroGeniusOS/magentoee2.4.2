<?php
namespace Magento\CompanyCredit\Model\HistoryRepository;

/**
 * Proxy class for @see \Magento\CompanyCredit\Model\HistoryRepository
 */
class Proxy extends \Magento\CompanyCredit\Model\HistoryRepository implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\CompanyCredit\Model\HistoryRepository
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\CompanyCredit\\Model\\HistoryRepository', $shared = true)
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
     * @return \Magento\CompanyCredit\Model\HistoryRepository
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
    public function save(\Magento\CompanyCredit\Model\HistoryInterface $history)
    {
        return $this->_getSubject()->save($history);
    }

    /**
     * {@inheritdoc}
     */
    public function get($historyId)
    {
        return $this->_getSubject()->get($historyId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\CompanyCredit\Model\HistoryInterface $history)
    {
        return $this->_getSubject()->delete($history);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $criteria)
    {
        return $this->_getSubject()->getList($criteria);
    }
}
