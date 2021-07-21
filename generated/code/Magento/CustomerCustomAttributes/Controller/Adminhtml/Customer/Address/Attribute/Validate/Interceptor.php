<?php
namespace Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Address\Attribute\Validate;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Address\Attribute\Validate
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Address\Attribute\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Eav\Model\Config $eavConfig, \Magento\Customer\Model\AttributeFactory $attrFactory, \Magento\Eav\Model\Entity\Attribute\SetFactory $attrSetFactory, \Magento\Store\Model\WebsiteFactory $websiteFactory, ?\Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $extensionValidator = null, ?\Magento\CustomerCustomAttributes\Model\Customer\Attribute\CompositeValidator $compositeValidator = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $eavConfig, $attrFactory, $attrSetFactory, $websiteFactory, $extensionValidator, $compositeValidator);
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
