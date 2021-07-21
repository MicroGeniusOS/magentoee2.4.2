<?php
namespace Magento\ResourceConnections\Console\Command\AddSlave;

/**
 * Interceptor class for @see \Magento\ResourceConnections\Console\Command\AddSlave
 */
class Interceptor extends \Magento\ResourceConnections\Console\Command\AddSlave implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\DeploymentConfig\Writer $configWriter, \Magento\Framework\App\DeploymentConfig\Reader $configReader, $name = null)
    {
        $this->___init();
        parent::__construct($configWriter, $configReader, $name);
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
