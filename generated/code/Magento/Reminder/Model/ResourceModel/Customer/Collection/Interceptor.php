<?php
namespace Magento\Reminder\Model\ResourceModel\Customer\Collection;

/**
 * Interceptor class for @see \Magento\Reminder\Model\ResourceModel\Customer\Collection
 */
class Interceptor extends \Magento\Reminder\Model\ResourceModel\Customer\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\DataObject\Copy\Config $fieldsetConfig, \Magento\Framework\Registry $coreRegistry, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, $modelName = 'Magento\\Customer\\Model\\Customer')
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $entitySnapshot, $fieldsetConfig, $coreRegistry, $connection, $modelName);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToFilter($attribute, $condition = null, $joinType = 'inner')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToFilter');
        return $pluginInfo ? $this->___callPlugins('addAttributeToFilter', func_get_args(), $pluginInfo) : parent::addAttributeToFilter($attribute, $condition, $joinType);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}