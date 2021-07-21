<?php
namespace Magento\Staging\Model\Preview\UrlBuilder;

/**
 * Interceptor class for @see \Magento\Staging\Model\Preview\UrlBuilder
 */
class Interceptor extends \Magento\Staging\Model\Preview\UrlBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\Url $frontendUrl)
    {
        $this->___init();
        parent::__construct($urlBuilder, $frontendUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviewUrl($versionId, $url = null, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreviewUrl');
        return $pluginInfo ? $this->___callPlugins('getPreviewUrl', func_get_args(), $pluginInfo) : parent::getPreviewUrl($versionId, $url, $store);
    }
}
