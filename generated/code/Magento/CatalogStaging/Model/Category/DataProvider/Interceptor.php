<?php
namespace Magento\CatalogStaging\Model\Category\DataProvider;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Model\Category\DataProvider
 */
class Interceptor extends \Magento\CatalogStaging\Model\Category\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Ui\DataProvider\EavValidationRules $eavValidationRules, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\RequestInterface $request, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Staging\Model\Entity\DataProvider\MetadataProvider $metadataProvider, array $meta = [], array $data = [], ?\Magento\Staging\Api\UpdateRepositoryInterface $updateRepository = null, ?\Magento\Staging\Model\VersionManager $versionManager = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $eavValidationRules, $categoryCollectionFactory, $storeManager, $registry, $eavConfig, $request, $categoryFactory, $metadataProvider, $meta, $data, $updateRepository, $versionManager, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMeta($meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMeta');
        return $pluginInfo ? $this->___callPlugins('prepareMeta', func_get_args(), $pluginInfo) : parent::prepareMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesMeta(\Magento\Eav\Model\Entity\Type $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesMeta');
        return $pluginInfo ? $this->___callPlugins('getAttributesMeta', func_get_args(), $pluginInfo) : parent::getAttributesMeta($entityType);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultMetaData($result)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultMetaData');
        return $pluginInfo ? $this->___callPlugins('getDefaultMetaData', func_get_args(), $pluginInfo) : parent::getDefaultMetaData($result);
    }
}
