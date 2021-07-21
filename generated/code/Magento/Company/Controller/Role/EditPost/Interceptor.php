<?php
namespace Magento\Company\Controller\Role\EditPost;

/**
 * Interceptor class for @see \Magento\Company\Controller\Role\EditPost
 */
class Interceptor extends \Magento\Company\Controller\Role\EditPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Company\Api\RoleRepositoryInterface $roleRepository, \Magento\Company\Api\Data\RoleInterfaceFactory $roleFactory, \Magento\Company\Model\CompanyUser $companyUser, \Magento\Company\Model\PermissionManagementInterface $permissionManagement)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $roleRepository, $roleFactory, $companyUser, $permissionManagement);
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
