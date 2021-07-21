<?php
namespace Magento\CatalogStagingGraphQl\Model\Resolver\CategoryStagingStatus;

/**
 * Interceptor class for @see \Magento\CatalogStagingGraphQl\Model\Resolver\CategoryStagingStatus
 */
class Interceptor extends \Magento\CatalogStagingGraphQl\Model\Resolver\CategoryStagingStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Staging\Model\VersionManager $versionManager, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Staging\Api\UpdateRepositoryInterface $updateRepository)
    {
        $this->___init();
        parent::__construct($versionManager, $valueFactory, $dateTime, $updateRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
