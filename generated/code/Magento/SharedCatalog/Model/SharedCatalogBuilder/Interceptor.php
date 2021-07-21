<?php
namespace Magento\SharedCatalog\Model\SharedCatalogBuilder;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\SharedCatalogBuilder
 */
class Interceptor extends \Magento\SharedCatalog\Model\SharedCatalogBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SharedCatalog\Api\SharedCatalogRepositoryInterface $sharedCatalogRepository, \Magento\SharedCatalog\Model\SharedCatalogFactory $sharedCatalogFactory)
    {
        $this->___init();
        parent::__construct($sharedCatalogRepository, $sharedCatalogFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function build($sharedCatalogId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($sharedCatalogId);
    }
}
