<?php
namespace Magento\GiftCardAccount\Controller\Customer\Index;

/**
 * Interceptor class for @see \Magento\GiftCardAccount\Controller\Customer\Index
 */
class Interceptor extends \Magento\GiftCardAccount\Controller\Customer\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, ?\Magento\CustomerBalance\Helper\Data $customerBalanceHelper = null, ?\Magento\GiftCardAccount\Model\Spi\GiftCardAccountManagerInterface $manager = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\GiftCardAccount\Model\GiftcardaccountFactory $giftCardFactory = null)
    {
        $this->___init();
        parent::__construct($context, $customerBalanceHelper, $manager, $storeManager, $giftCardFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
