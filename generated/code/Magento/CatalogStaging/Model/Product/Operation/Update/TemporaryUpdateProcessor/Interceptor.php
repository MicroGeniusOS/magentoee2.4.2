<?php
namespace Magento\CatalogStaging\Model\Product\Operation\Update\TemporaryUpdateProcessor;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Model\Product\Operation\Update\TemporaryUpdateProcessor
 */
class Interceptor extends \Magento\CatalogStaging\Model\Product\Operation\Update\TemporaryUpdateProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\EntityManager $entityManager, \Magento\Staging\Model\VersionManager $versionManager, \Magento\Staging\Model\ResourceModel\Db\ReadEntityVersion $entityVersion, \Magento\Staging\Model\Operation\Update\CreateEntityVersion $createEntityVersion, \Magento\Staging\Model\Entity\Builder $builder, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper $initializationHelper, \Magento\Catalog\Api\ProductLinkRepositoryInterface $linkRepository, ?\Magento\CatalogStaging\Model\ResourceModel\Product\Price\TierPriceCopier $tierPriceCopier = null)
    {
        $this->___init();
        parent::__construct($entityManager, $versionManager, $entityVersion, $createEntityVersion, $builder, $initializationHelper, $linkRepository, $tierPriceCopier);
    }

    /**
     * {@inheritdoc}
     */
    public function loadEntity($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadEntity');
        return $pluginInfo ? $this->___callPlugins('loadEntity', func_get_args(), $pluginInfo) : parent::loadEntity($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function buildEntity($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildEntity');
        return $pluginInfo ? $this->___callPlugins('buildEntity', func_get_args(), $pluginInfo) : parent::buildEntity($entity);
    }
}
