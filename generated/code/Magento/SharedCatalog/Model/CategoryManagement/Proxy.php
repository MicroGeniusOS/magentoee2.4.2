<?php
namespace Magento\SharedCatalog\Model\CategoryManagement;

/**
 * Proxy class for @see \Magento\SharedCatalog\Model\CategoryManagement
 */
class Proxy extends \Magento\SharedCatalog\Model\CategoryManagement implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\SharedCatalog\Model\CategoryManagement
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\SharedCatalog\\Model\\CategoryManagement', $shared = true)
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
     * @return \Magento\SharedCatalog\Model\CategoryManagement
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
    public function getCategories($id)
    {
        return $this->_getSubject()->getCategories($id);
    }

    /**
     * {@inheritdoc}
     */
    public function assignCategories($id, array $categories)
    {
        return $this->_getSubject()->assignCategories($id, $categories);
    }

    /**
     * {@inheritdoc}
     */
    public function unassignCategories($id, array $categories)
    {
        return $this->_getSubject()->unassignCategories($id, $categories);
    }
}
