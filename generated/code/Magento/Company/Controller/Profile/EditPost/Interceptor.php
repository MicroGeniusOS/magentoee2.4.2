<?php
namespace Magento\Company\Controller\Profile\EditPost;

/**
 * Interceptor class for @see \Magento\Company\Controller\Profile\EditPost
 */
class Interceptor extends \Magento\Company\Controller\Profile\EditPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Company\Model\CompanyContext $companyContext, \Psr\Log\LoggerInterface $logger, \Magento\Company\Api\CompanyManagementInterface $companyManagement, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Company\Model\CompanyProfile $companyProfile, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository)
    {
        $this->___init();
        parent::__construct($context, $companyContext, $logger, $companyManagement, $formKeyValidator, $companyProfile, $companyRepository);
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
