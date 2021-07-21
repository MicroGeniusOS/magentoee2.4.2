<?php
namespace Magento\ScheduledImportExport\Model\Scheduled\Operation\Data;

/**
 * Interceptor class for @see \Magento\ScheduledImportExport\Model\Scheduled\Operation\Data
 */
class Interceptor extends \Magento\ScheduledImportExport\Model\Scheduled\Operation\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\Import\ConfigInterface $importConfig, \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig)
    {
        $this->___init();
        parent::__construct($importConfig, $exportConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getServerTypesOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServerTypesOptionArray');
        return $pluginInfo ? $this->___callPlugins('getServerTypesOptionArray', func_get_args(), $pluginInfo) : parent::getServerTypesOptionArray();
    }
}
