<?php
namespace Magento\CatalogPermissions\Observer\CheckQuotePermissionsObserver;

/**
 * Interceptor class for @see \Magento\CatalogPermissions\Observer\CheckQuotePermissionsObserver
 */
class Interceptor extends \Magento\CatalogPermissions\Observer\CheckQuotePermissionsObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogPermissions\App\ConfigInterface $permissionsConfig, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogPermissions\Model\Permission\Index $permissionIndex, \Magento\Store\Api\StoreRepositoryInterface $storeRepository)
    {
        $this->___init();
        parent::__construct($permissionsConfig, $customerSession, $permissionIndex, $storeRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
