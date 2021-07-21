<?php
namespace Magento\Company\Controller\Role\Delete;

/**
 * Interceptor class for @see \Magento\Company\Controller\Role\Delete
 */
class Interceptor extends \Magento\Company\Controller\Role\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Company\Api\RoleRepositoryInterface $roleRepository, \Magento\Company\Model\CompanyUser $companyUser)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $roleRepository, $companyUser);
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
