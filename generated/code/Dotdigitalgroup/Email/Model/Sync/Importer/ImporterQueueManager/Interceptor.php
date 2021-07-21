<?php
namespace Dotdigitalgroup\Email\Model\Sync\Importer\ImporterQueueManager;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Sync\Importer\ImporterQueueManager
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Sync\Importer\ImporterQueueManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Model\Sync\Importer\Type\Contact\BulkFactory $contactBulkFactory, \Dotdigitalgroup\Email\Model\Sync\Importer\Type\Contact\UpdateFactory $contactUpdateFactory, \Dotdigitalgroup\Email\Model\Sync\Importer\Type\Contact\DeleteFactory $contactDeleteFactory, \Dotdigitalgroup\Email\Model\Sync\Importer\Type\TransactionalData\BulkFactory $bulkFactory, \Dotdigitalgroup\Email\Model\Sync\Importer\Type\TransactionalData\UpdateFactory $updateFactory, \Dotdigitalgroup\Email\Model\Sync\Importer\Type\TransactionalData\DeleteFactory $deleteFactory)
    {
        $this->___init();
        parent::__construct($contactBulkFactory, $contactUpdateFactory, $contactDeleteFactory, $bulkFactory, $updateFactory, $deleteFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getBulkQueue(array $additionalImportTypes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBulkQueue');
        return $pluginInfo ? $this->___callPlugins('getBulkQueue', func_get_args(), $pluginInfo) : parent::getBulkQueue($additionalImportTypes);
    }
}
