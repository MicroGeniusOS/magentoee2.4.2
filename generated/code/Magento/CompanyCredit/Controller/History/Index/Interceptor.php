<?php
namespace Magento\CompanyCredit\Controller\History\Index;

/**
 * Interceptor class for @see \Magento\CompanyCredit\Controller\History\Index
 */
class Interceptor extends \Magento\CompanyCredit\Controller\History\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Api\StatusServiceInterface $moduleConfig, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\CompanyCredit\Model\PaymentMethodStatus $paymentMethodStatus, \Magento\Company\Api\AuthorizationInterface $authorization, \Psr\Log\LoggerInterface $logger, \Magento\Company\Model\CompanyUserPermission $companyUserPermission)
    {
        $this->___init();
        parent::__construct($context, $moduleConfig, $userContext, $paymentMethodStatus, $authorization, $logger, $companyUserPermission);
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
