<?php
namespace Dotdigitalgroup\Email\Setup\Install\DataMigrationTypeProvider;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Setup\Install\DataMigrationTypeProvider
 */
class Interceptor extends \Dotdigitalgroup\Email\Setup\Install\DataMigrationTypeProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailContactTableCustomers $insertEmailContactTableCustomers, \Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailContactTableSubscribers $insertEmailContactTableSubscribers, \Dotdigitalgroup\Email\Setup\Install\Type\UpdateContactsWithSubscriberCustomers $updateContactsWithSubscriberCustomers, \Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailOrderTable $insertEmailOrderTable, \Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailReviewTable $insertEmailReviewTable, \Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailWishlistTable $insertEmailWishlistTable, \Dotdigitalgroup\Email\Setup\Install\Type\InsertEmailCatalogTable $insertEmailCatalogTable)
    {
        $this->___init();
        parent::__construct($insertEmailContactTableCustomers, $insertEmailContactTableSubscribers, $updateContactsWithSubscriberCustomers, $insertEmailOrderTable, $insertEmailReviewTable, $insertEmailWishlistTable, $insertEmailCatalogTable);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypes');
        return $pluginInfo ? $this->___callPlugins('getTypes', func_get_args(), $pluginInfo) : parent::getTypes();
    }
}
