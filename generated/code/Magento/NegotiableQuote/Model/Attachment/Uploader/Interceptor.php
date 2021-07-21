<?php
namespace Magento\NegotiableQuote\Model\Attachment\Uploader;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\Attachment\Uploader
 */
class Interceptor extends \Magento\NegotiableQuote\Model\Attachment\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\NegotiableQuote\Model\Config $negotiableQuoteConfig)
    {
        $this->___init();
        parent::__construct($negotiableQuoteConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destinationFolder, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destinationFolder, $newFileName);
    }
}
