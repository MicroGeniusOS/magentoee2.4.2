<?php
namespace Magento\ScalableOms\Console\Command\SplitSales;

/**
 * Interceptor class for @see \Magento\ScalableOms\Console\Command\SplitSales
 */
class Interceptor extends \Magento\ScalableOms\Console\Command\SplitSales implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\DeploymentConfig\Writer $configWriter, \Magento\Framework\App\DeploymentConfig\Reader $configReader, \Magento\Framework\App\ResourceConnection\ConnectionFactory $connectionFactory, $tables = [], $name = null, array $tableIterators = [], ?\Magento\Framework\ForeignKey\Migration\TableNameArrayIteratorFactory $tableNameIteratorFactory = null)
    {
        $this->___init();
        parent::__construct($configWriter, $configReader, $connectionFactory, $tables, $name, $tableIterators, $tableNameIteratorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
