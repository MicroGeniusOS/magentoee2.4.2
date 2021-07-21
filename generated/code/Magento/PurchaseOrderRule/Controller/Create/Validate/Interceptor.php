<?php
namespace Magento\PurchaseOrderRule\Controller\Create\Validate;

/**
 * Interceptor class for @see \Magento\PurchaseOrderRule\Controller\Create\Validate
 */
class Interceptor extends \Magento\PurchaseOrderRule\Controller\Create\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Magento\PurchaseOrder\Model\Customer\Authorization $authorization, \Magento\PurchaseOrder\Model\Config $purchaseOrderConfig, \Magento\Company\Model\CompanyUser $companyUser, \Magento\PurchaseOrderRule\Api\RuleRepositoryInterface $ruleRepository)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $authorization, $purchaseOrderConfig, $companyUser, $ruleRepository);
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
