<?php
namespace Magento\Elasticsearch\Model\ResourceModel\Engine;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Model\ResourceModel\Engine
 */
class Interceptor extends \Magento\Elasticsearch\Model\ResourceModel\Engine implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\Indexer\ScopeResolver\IndexScopeResolver $indexScopeResolver)
    {
        $this->___init();
        parent::__construct($catalogProductVisibility, $indexScopeResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedVisibility');
        return $pluginInfo ? $this->___callPlugins('getAllowedVisibility', func_get_args(), $pluginInfo) : parent::getAllowedVisibility();
    }
}
