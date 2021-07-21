<?php
namespace Magento\Company\Controller\Team\Manage;

/**
 * Interceptor class for @see \Magento\Company\Controller\Team\Manage
 */
class Interceptor extends \Magento\Company\Controller\Team\Manage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Company\Model\Company\Structure $structureManager, \Magento\Company\Api\TeamRepositoryInterface $teamRepository, \Magento\Company\Api\Data\TeamInterfaceFactory $teamFactory, \Magento\Framework\Api\DataObjectHelper $objectHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $structureManager, $teamRepository, $teamFactory, $objectHelper, $customerRepository);
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
