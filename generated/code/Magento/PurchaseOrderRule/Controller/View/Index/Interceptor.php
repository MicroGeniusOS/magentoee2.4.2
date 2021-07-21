<?php
namespace Magento\PurchaseOrderRule\Controller\View\Index;

/**
 * Interceptor class for @see \Magento\PurchaseOrderRule\Controller\View\Index
 */
class Interceptor extends \Magento\PurchaseOrderRule\Controller\View\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\PurchaseOrder\Model\Config $purchaseOrderConfig, \Magento\PurchaseOrderRule\Api\RuleRepositoryInterface $ruleRepository, \Magento\Company\Model\CompanyUser $companyUser, \Magento\Company\Model\CompanyContext $companyContext, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\ResponseInterface $response)
    {
        $this->___init();
        parent::__construct($request, $messageManager, $purchaseOrderConfig, $ruleRepository, $companyUser, $companyContext, $resultFactory, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
