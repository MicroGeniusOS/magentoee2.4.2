<?php
namespace Magento\CompanyCredit\Controller\Adminhtml\Currency\GetRate;

/**
 * Interceptor class for @see \Magento\CompanyCredit\Controller\Adminhtml\Currency\GetRate
 */
class Interceptor extends \Magento\CompanyCredit\Controller\Adminhtml\Currency\GetRate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $priceCurrency, $logger);
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
