<?php
namespace Magento\Support\Console\Command\BackupDbCommand;

/**
 * Interceptor class for @see \Magento\Support\Console\Command\BackupDbCommand
 */
class Interceptor extends \Magento\Support\Console\Command\BackupDbCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Support\Helper\Shell $shellHelper, \Magento\Support\Model\Backup\Config $backupConfig, \Magento\Framework\App\DeploymentConfig $deploymentConfig)
    {
        $this->___init();
        parent::__construct($shellHelper, $backupConfig, $deploymentConfig);
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
