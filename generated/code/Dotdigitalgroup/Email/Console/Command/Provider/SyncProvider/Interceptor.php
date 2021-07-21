<?php
namespace Dotdigitalgroup\Email\Console\Command\Provider\SyncProvider;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Console\Command\Provider\SyncProvider
 */
class Interceptor extends \Dotdigitalgroup\Email\Console\Command\Provider\SyncProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Model\Sync\AbandonedCartFactory $abandonedCartFactory, \Dotdigitalgroup\Email\Model\Sync\AutomationFactory $automationFactory, \Dotdigitalgroup\Email\Model\Sync\CampaignFactory $campaignFactory, \Dotdigitalgroup\Email\Model\Sync\CatalogFactory $catalogFactory, \Dotdigitalgroup\Email\Model\Apiconnector\ContactFactory $contactFactory, \Dotdigitalgroup\Email\Model\Customer\GuestFactory $guestFactory, \Dotdigitalgroup\Email\Model\Sync\ImporterFactory $importerFactory, \Dotdigitalgroup\Email\Model\Sync\IntegrationInsightsFactory $integrationInsightsFactory, \Dotdigitalgroup\Email\Model\Sync\OrderFactory $orderFactory, \Dotdigitalgroup\Email\Model\Sync\ReviewFactory $reviewFactory, \Dotdigitalgroup\Email\Model\Newsletter\SubscriberFactory $subscriberFactory, \Dotdigitalgroup\Email\Model\Email\TemplateFactory $templateFactory, \Dotdigitalgroup\Email\Model\Sync\WishlistFactory $wishlistFactory)
    {
        $this->___init();
        parent::__construct($abandonedCartFactory, $automationFactory, $campaignFactory, $catalogFactory, $contactFactory, $guestFactory, $importerFactory, $integrationInsightsFactory, $orderFactory, $reviewFactory, $subscriberFactory, $templateFactory, $wishlistFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableSyncs(array $additionalSyncs = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableSyncs');
        return $pluginInfo ? $this->___callPlugins('getAvailableSyncs', func_get_args(), $pluginInfo) : parent::getAvailableSyncs($additionalSyncs);
    }
}
