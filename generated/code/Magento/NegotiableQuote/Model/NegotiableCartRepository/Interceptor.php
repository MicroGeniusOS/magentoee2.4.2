<?php
namespace Magento\NegotiableQuote\Model\NegotiableCartRepository;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\NegotiableCartRepository
 */
class Interceptor extends \Magento\NegotiableQuote\Model\NegotiableCartRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $cartRepository)
    {
        $this->___init();
        parent::__construct($cartRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($cartId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function getForCustomer($customerId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForCustomer');
        return $pluginInfo ? $this->___callPlugins('getForCustomer', func_get_args(), $pluginInfo) : parent::getForCustomer($customerId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActive($cartId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActive');
        return $pluginInfo ? $this->___callPlugins('getActive', func_get_args(), $pluginInfo) : parent::getActive($cartId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveForCustomer($customerId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveForCustomer');
        return $pluginInfo ? $this->___callPlugins('getActiveForCustomer', func_get_args(), $pluginInfo) : parent::getActiveForCustomer($customerId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($quote);
    }
}
