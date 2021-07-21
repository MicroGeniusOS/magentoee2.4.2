<?php
namespace Magento\Company\Controller\Account\Validate;

/**
 * Interceptor class for @see \Magento\Company\Controller\Account\Validate
 */
class Interceptor extends \Magento\Company\Controller\Account\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository)
    {
        $this->___init();
        parent::__construct($context, $searchCriteriaBuilder, $customerRepository, $companyRepository);
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
