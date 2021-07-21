<?php
namespace Magento\NegotiableQuote\Controller\Quote\Create;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Controller\Quote\Create
 */
class Interceptor extends \Magento\NegotiableQuote\Controller\Quote\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\NegotiableQuote\Helper\Quote $quoteHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Model\Restriction\RestrictionInterface $customerRestriction, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\NegotiableQuote\Model\SettingsProvider $settingsProvider, \Magento\Checkout\Model\Session $checkoutSession, \Magento\NegotiableQuote\Controller\FileProcessor $fileProcessor)
    {
        $this->___init();
        parent::__construct($context, $quoteHelper, $quoteRepository, $customerRestriction, $negotiableQuoteManagement, $settingsProvider, $checkoutSession, $fileProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
