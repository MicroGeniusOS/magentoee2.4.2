<?php
namespace Magento\Captcha\Helper\Adminhtml\Data;

/**
 * Interceptor class for @see \Magento\Captcha\Helper\Adminhtml\Data
 */
class Interceptor extends \Magento\Captcha\Helper\Adminhtml\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\Filesystem $filesystem, \Magento\Captcha\Model\CaptchaFactory $factory, \Magento\Backend\App\ConfigInterface $backendConfig)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $filesystem, $factory, $backendConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig($key, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        return $pluginInfo ? $this->___callPlugins('getConfig', func_get_args(), $pluginInfo) : parent::getConfig($key, $store);
    }
}
