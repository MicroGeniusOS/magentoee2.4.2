<?php
namespace Magento\AdvancedCheckout\Controller\Cart\AdvancedAdd;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Controller\Cart\AdvancedAdd
 */
class Interceptor extends \Magento\AdvancedCheckout\Controller\Cart\AdvancedAdd implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder = null, ?\Magento\Framework\Stdlib\CookieManagerInterface $cookieManager = null, ?\Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory = null)
    {
        $this->___init();
        parent::__construct($context, $productRepository, $criteriaBuilder, $cookieManager, $cookieMetadataFactory);
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
