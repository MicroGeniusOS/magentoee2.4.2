<?php
namespace Magento\VisualMerchandiser\Model\Rules\Rule;

/**
 * Factory class for @see \Magento\VisualMerchandiser\Model\Rules\Rule\UpdatedAt
 */
class UpdatedAtFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\VisualMerchandiser\\Model\\Rules\\Rule\\UpdatedAt')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\VisualMerchandiser\Model\Rules\Rule\UpdatedAt
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
