<?php
namespace Magento\CmsStaging\Model\Block\Identifier\DataProvider;

/**
 * Interceptor class for @see \Magento\CmsStaging\Model\Block\Identifier\DataProvider
 */
class Interceptor extends \Magento\CmsStaging\Model\Block\Identifier\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockCollectionFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $blockCollectionFactory, $dataPersistor, $meta, $data, $pool);
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
