<?php
namespace Magento\Company\Controller\Customer\AcceptInvitation;

/**
 * Interceptor class for @see \Magento\Company\Controller\Customer\AcceptInvitation
 */
class Interceptor extends \Magento\Company\Controller\Customer\AcceptInvitation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Company\Api\CompanyUserManagerInterface $userManager, \Magento\Company\Api\Data\CompanyCustomerInterfaceFactory $userFactory)
    {
        $this->___init();
        parent::__construct($context, $dataObjectHelper, $userManager, $userFactory);
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
