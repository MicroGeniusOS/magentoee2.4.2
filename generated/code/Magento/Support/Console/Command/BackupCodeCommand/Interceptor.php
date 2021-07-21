<?php
namespace Magento\Support\Console\Command\BackupCodeCommand;

/**
 * Interceptor class for @see \Magento\Support\Console\Command\BackupCodeCommand
 */
class Interceptor extends \Magento\Support\Console\Command\BackupCodeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Support\Helper\Shell $shellHelper, \Magento\Support\Model\Backup\Config $backupConfig, \Magento\Framework\App\DeploymentConfig $deploymentConfig, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($shellHelper, $backupConfig, $deploymentConfig, $filesystem);
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
