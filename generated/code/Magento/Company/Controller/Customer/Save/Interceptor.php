<?php
namespace Magento\Company\Controller\Customer\Save;

/**
 * Interceptor class for @see \Magento\Company\Controller\Customer\Save
 */
class Interceptor extends \Magento\Company\Controller\Customer\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Company\Model\Action\SaveCustomer $customerAction, \Magento\Company\Model\Company\Structure $structureManager)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $customerAction, $structureManager);
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
