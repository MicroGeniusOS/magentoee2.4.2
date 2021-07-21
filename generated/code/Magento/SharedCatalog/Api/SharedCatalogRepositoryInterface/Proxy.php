<?php
namespace Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface;

/**
 * Proxy class for @see \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface
 */
class Proxy implements \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\SharedCatalog\\Api\\SharedCatalogRepositoryInterface', $shared = true)
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
     * @return \Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface
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
    public function save(\Magento\SharedCatalog\Api\Data\SharedCatalogInterface $sharedCatalog)
    {
        return $this->_getSubject()->save($sharedCatalog);
    }

    /**
     * {@inheritdoc}
     */
    public function get($sharedCatalogId)
    {
        return $this->_getSubject()->get($sharedCatalogId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\SharedCatalog\Api\Data\SharedCatalogInterface $sharedCatalog)
    {
        return $this->_getSubject()->delete($sharedCatalog);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($sharedCatalogId)
    {
        return $this->_getSubject()->deleteById($sharedCatalogId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        return $this->_getSubject()->getList($searchCriteria);
    }
}
