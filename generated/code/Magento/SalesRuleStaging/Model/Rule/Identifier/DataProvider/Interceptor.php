<?php
namespace Magento\SalesRuleStaging\Model\Rule\Identifier\DataProvider;

/**
 * Interceptor class for @see \Magento\SalesRuleStaging\Model\Rule\Identifier\DataProvider
 */
class Interceptor extends \Magento\SalesRuleStaging\Model\Rule\Identifier\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $collectionFactory, \Magento\Framework\Registry $registry, \Magento\SalesRule\Model\Rule\Metadata\ValueProvider $metadataValueProvider, array $meta = [], array $data = [], ?\Magento\Framework\App\Request\DataPersistorInterface $dataPersistor = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $registry, $metadataValueProvider, $meta, $data, $dataPersistor);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
