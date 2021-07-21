<?php
namespace Magento\Company\Controller\Customer\Get;

/**
 * Interceptor class for @see \Magento\Company\Controller\Customer\Get
 */
class Interceptor extends \Magento\Company\Controller\Customer\Get implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Company\Model\Company\Structure $structureManager, \Magento\Company\Api\AclInterface $acl, ?\Magento\Eav\Model\Config $eavConfig = null)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $customerRepository, $structureManager, $acl, $eavConfig);
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
