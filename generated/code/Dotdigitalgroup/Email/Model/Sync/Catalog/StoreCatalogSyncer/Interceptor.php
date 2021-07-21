<?php
namespace Dotdigitalgroup\Email\Model\Sync\Catalog\StoreCatalogSyncer;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Sync\Catalog\StoreCatalogSyncer
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Sync\Catalog\StoreCatalogSyncer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Model\ImporterFactory $importerFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Email\Model\Sync\Catalog\Exporter $exporter)
    {
        $this->___init();
        parent::__construct($importerFactory, $helper, $exporter);
    }

    /**
     * {@inheritdoc}
     */
    public function syncByStore($productsToProcess, $storeId, $websiteId, $importType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'syncByStore');
        return $pluginInfo ? $this->___callPlugins('syncByStore', func_get_args(), $pluginInfo) : parent::syncByStore($productsToProcess, $storeId, $websiteId, $importType);
    }
}
