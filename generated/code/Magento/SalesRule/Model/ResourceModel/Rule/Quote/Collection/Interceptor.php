<?php
namespace Magento\SalesRule\Model\ResourceModel\Rule\Quote\Collection;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\ResourceModel\Rule\Quote\Collection
 */
class Interceptor extends \Magento\SalesRule\Model\ResourceModel\Rule\Quote\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $date, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $date, $connection, $resource, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function setValidationFilter($websiteId, $customerGroupId, $couponCode = '', $now = null, ?\Magento\Quote\Model\Quote\Address $address = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValidationFilter');
        return $pluginInfo ? $this->___callPlugins('setValidationFilter', func_get_args(), $pluginInfo) : parent::setValidationFilter($websiteId, $customerGroupId, $couponCode, $now, $address);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        return $pluginInfo ? $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo) : parent::getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
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
