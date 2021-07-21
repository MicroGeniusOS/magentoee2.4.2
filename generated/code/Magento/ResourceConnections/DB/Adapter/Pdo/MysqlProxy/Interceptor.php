<?php
namespace Magento\ResourceConnections\DB\Adapter\Pdo\MysqlProxy;

/**
 * Interceptor class for @see \Magento\ResourceConnections\DB\Adapter\Pdo\MysqlProxy
 */
class Interceptor extends \Magento\ResourceConnections\DB\Adapter\Pdo\MysqlProxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\DB\LoggerInterface $logger, \Magento\Framework\DB\SelectFactory $selectFactory, array $config, ?\Magento\Framework\DB\Adapter\Pdo\MysqlFactory $mysqlFactory = null)
    {
        $this->___init();
        parent::__construct($logger, $selectFactory, $config, $mysqlFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        return $pluginInfo ? $this->___callPlugins('commit', func_get_args(), $pluginInfo) : parent::commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        return $pluginInfo ? $this->___callPlugins('rollBack', func_get_args(), $pluginInfo) : parent::rollBack();
    }
}
