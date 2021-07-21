<?php
namespace Magento\Store\Model\StoreManager;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreManager
 */
class Interceptor extends \Magento\Store\Model\StoreManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Store\Api\GroupRepositoryInterface $groupRepository, \Magento\Store\Api\WebsiteRepositoryInterface $websiteRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Api\StoreResolverInterface $storeResolver, \Magento\Framework\Cache\FrontendInterface $cache, $isSingleStoreAllowed = true)
    {
        $this->___init();
        parent::__construct($storeRepository, $groupRepository, $websiteRepository, $scopeConfig, $storeResolver, $cache, $isSingleStoreAllowed);
    }

    /**
     * {@inheritdoc}
     */
    public function getStores($withDefault = false, $codeKey = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStores');
        return $pluginInfo ? $this->___callPlugins('getStores', func_get_args(), $pluginInfo) : parent::getStores($withDefault, $codeKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsites($withDefault = false, $codeKey = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsites');
        return $pluginInfo ? $this->___callPlugins('getWebsites', func_get_args(), $pluginInfo) : parent::getWebsites($withDefault, $codeKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreView()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultStoreView');
        return $pluginInfo ? $this->___callPlugins('getDefaultStoreView', func_get_args(), $pluginInfo) : parent::getDefaultStoreView();
    }

    /**
     * {@inheritdoc}
     */
    public function getGroups($withDefault = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroups');
        return $pluginInfo ? $this->___callPlugins('getGroups', func_get_args(), $pluginInfo) : parent::getGroups($withDefault);
    }
}
