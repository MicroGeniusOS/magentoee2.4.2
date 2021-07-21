<?php
namespace Magento\SharedCatalog\Model\SharedCatalogInvalidation;

/**
 * Proxy class for @see \Magento\SharedCatalog\Model\SharedCatalogInvalidation
 */
class Proxy extends \Magento\SharedCatalog\Model\SharedCatalogInvalidation implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\SharedCatalog\Model\SharedCatalogInvalidation
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\SharedCatalog\\Model\\SharedCatalogInvalidation', $shared = true)
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
     * @return \Magento\SharedCatalog\Model\SharedCatalogInvalidation
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
    public function cleanCacheByTag($sku)
    {
        return $this->_getSubject()->cleanCacheByTag($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateIndexRegistryItem()
    {
        return $this->_getSubject()->invalidateIndexRegistryItem();
    }

    /**
     * {@inheritdoc}
     */
    public function validateAssignProducts(array $products, array $categoryIds)
    {
        return $this->_getSubject()->validateAssignProducts($products, $categoryIds);
    }

    /**
     * {@inheritdoc}
     */
    public function validateUnassignProducts(array $products)
    {
        return $this->_getSubject()->validateUnassignProducts($products);
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductExist($sku)
    {
        return $this->_getSubject()->checkProductExist($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexCatalogProductPermissions(array $productIds)
    {
        return $this->_getSubject()->reindexCatalogProductPermissions($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexCatalogPermissions($reindexCategoryIds)
    {
        return $this->_getSubject()->reindexCatalogPermissions($reindexCategoryIds);
    }

    /**
     * {@inheritdoc}
     */
    public function checkSharedCatalogExist($sharedCatalogId)
    {
        return $this->_getSubject()->checkSharedCatalogExist($sharedCatalogId);
    }
}
