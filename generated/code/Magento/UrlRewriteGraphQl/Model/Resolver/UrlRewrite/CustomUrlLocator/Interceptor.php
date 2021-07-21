<?php
namespace Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite\CustomUrlLocator;

/**
 * Interceptor class for @see \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite\CustomUrlLocator
 */
class Interceptor extends \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite\CustomUrlLocator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $urlLocators = [])
    {
        $this->___init();
        parent::__construct($urlLocators);
    }

    /**
     * {@inheritdoc}
     */
    public function locateUrl($urlKey) : ?string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'locateUrl');
        return $pluginInfo ? $this->___callPlugins('locateUrl', func_get_args(), $pluginInfo) : parent::locateUrl($urlKey);
    }
}
