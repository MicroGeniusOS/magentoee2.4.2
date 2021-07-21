<?php
namespace Magento\SharedCatalog\Model\SharedCatalogAssignment;

/**
 * Proxy class for @see \Magento\SharedCatalog\Model\SharedCatalogAssignment
 */
class Proxy extends \Magento\SharedCatalog\Model\SharedCatalogAssignment implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\SharedCatalog\Model\SharedCatalogAssignment
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\SharedCatalog\\Model\\SharedCatalogAssignment', $shared = true)
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
     * @return \Magento\SharedCatalog\Model\SharedCatalogAssignment
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
    public function assignProductsForCategories($sharedCatalogId, array $assignCategoriesIds)
    {
        return $this->_getSubject()->assignProductsForCategories($sharedCatalogId, $assignCategoriesIds);
    }

    /**
     * {@inheritdoc}
     */
    public function unassignProductsForCategories($sharedCatalogId, array $unassignCategoriesIds, array $assignCategoriesIds)
    {
        return $this->_getSubject()->unassignProductsForCategories($sharedCatalogId, $unassignCategoriesIds, $assignCategoriesIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignCategoryIdsByProductSkus(array $assignProductsSkus)
    {
        return $this->_getSubject()->getAssignCategoryIdsByProductSkus($assignProductsSkus);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignCategoryIdsByProducts(array $assignProducts)
    {
        return $this->_getSubject()->getAssignCategoryIdsByProducts($assignProducts);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignProductsSku(array $assignProducts)
    {
        return $this->_getSubject()->getAssignProductsSku($assignProducts);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignProductSkusByCategoryIds(array $assignCategoriesIds)
    {
        return $this->_getSubject()->getAssignProductSkusByCategoryIds($assignCategoriesIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssignProductsByCategoryIds(array $assignCategoriesIds) : array
    {
        return $this->_getSubject()->getAssignProductsByCategoryIds($assignCategoriesIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductSkusToUnassign(array $unassignCategoriesIds, array $assignedCategoriesIds)
    {
        return $this->_getSubject()->getProductSkusToUnassign($unassignCategoriesIds, $assignedCategoriesIds);
    }
}
