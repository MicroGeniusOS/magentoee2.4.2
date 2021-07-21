<?php
namespace Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\Consumer;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\Consumer
 */
class Interceptor extends \Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\Consumer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\EntityManager\EntityManager $entityManager, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Catalog\Api\TierPriceStorageInterface $tierPriceStorage, \Magento\SharedCatalog\Model\ResourceModel\ProductItem\Price\PriceProcessor $priceProcessor)
    {
        $this->___init();
        parent::__construct($logger, $entityManager, $serializer, $tierPriceStorage, $priceProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function processOperations(\Magento\AsynchronousOperations\Api\Data\OperationListInterface $operationList)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processOperations');
        return $pluginInfo ? $this->___callPlugins('processOperations', func_get_args(), $pluginInfo) : parent::processOperations($operationList);
    }
}
