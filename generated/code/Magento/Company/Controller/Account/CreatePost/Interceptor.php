<?php
namespace Magento\Company\Controller\Account\CreatePost;

/**
 * Interceptor class for @see \Magento\Company\Controller\Account\CreatePost
 */
class Interceptor extends \Magento\Company\Controller\Account\CreatePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Authorization\Model\UserContextInterface $userContext, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Api\DataObjectHelper $objectHelper, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Company\Model\Action\Validator\Captcha $captchaValidator, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Company\Model\Create\Session $companyCreateSession, ?\Magento\Company\Model\CompanyUser $companyUser = null)
    {
        $this->___init();
        parent::__construct($context, $userContext, $logger, $objectHelper, $formKeyValidator, $captchaValidator, $customerAccountManagement, $customerDataFactory, $companyCreateSession, $companyUser);
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
