<?php
namespace Magento\RequisitionList\Controller\Item\AddToCart;

/**
 * Interceptor class for @see \Magento\RequisitionList\Controller\Item\AddToCart
 */
class Interceptor extends \Magento\RequisitionList\Controller\Item\AddToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\RequisitionList\Model\Action\RequestValidator $requestValidator, \Magento\Authorization\Model\UserContextInterface $userContext, \Psr\Log\LoggerInterface $logger, \Magento\RequisitionList\Api\RequisitionListManagementInterface $listManagement, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\RequisitionList\Model\RequisitionList\ItemSelector $itemSelector, ?\Magento\Framework\Stdlib\CookieManagerInterface $cookieManager = null, ?\Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory = null)
    {
        $this->___init();
        parent::__construct($context, $requestValidator, $userContext, $logger, $listManagement, $cartManagement, $storeManager, $itemSelector, $cookieManager, $cookieMetadataFactory);
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
