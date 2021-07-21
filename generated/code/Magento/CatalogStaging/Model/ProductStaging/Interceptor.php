<?php
namespace Magento\CatalogStaging\Model\ProductStaging;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Model\ProductStaging
 */
class Interceptor extends \Magento\CatalogStaging\Model\ProductStaging implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\EntityManager $entityManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Staging\Model\ResourceModel\Db\CampaignValidator $campaignValidator)
    {
        $this->___init();
        parent::__construct($entityManager, $storeManager, $campaignValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function schedule(\Magento\Catalog\Api\Data\ProductInterface $product, $version, $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'schedule');
        return $pluginInfo ? $this->___callPlugins('schedule', func_get_args(), $pluginInfo) : parent::schedule($product, $version, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function unschedule(\Magento\Catalog\Api\Data\ProductInterface $product, $version)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unschedule');
        return $pluginInfo ? $this->___callPlugins('unschedule', func_get_args(), $pluginInfo) : parent::unschedule($product, $version);
    }
}
