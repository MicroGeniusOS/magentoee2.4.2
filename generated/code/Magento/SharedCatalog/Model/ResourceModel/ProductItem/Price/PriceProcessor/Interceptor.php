<?php
namespace Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\PriceProcessor;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\PriceProcessor
 */
class Interceptor extends \Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\PriceProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\Data\TierPriceInterfaceFactory $tierPriceFactory)
    {
        $this->___init();
        parent::__construct($tierPriceFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function createPricesUpdate(array $operationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createPricesUpdate');
        return $pluginInfo ? $this->___callPlugins('createPricesUpdate', func_get_args(), $pluginInfo) : parent::createPricesUpdate($operationData);
    }

    /**
     * {@inheritdoc}
     */
    public function createPricesDelete(array $operationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createPricesDelete');
        return $pluginInfo ? $this->___callPlugins('createPricesDelete', func_get_args(), $pluginInfo) : parent::createPricesDelete($operationData);
    }
}
