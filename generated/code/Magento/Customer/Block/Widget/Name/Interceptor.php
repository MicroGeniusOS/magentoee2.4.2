<?php
namespace Magento\Customer\Block\Widget\Name;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\Name
 */
class Interceptor extends \Magento\Customer\Block\Widget\Name implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, \Magento\Customer\Model\Options $options, \Magento\Customer\Api\AddressMetadataInterface $addressMetadata, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $options, $addressMetadata, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefixOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrefixOptions');
        return $pluginInfo ? $this->___callPlugins('getPrefixOptions', func_get_args(), $pluginInfo) : parent::getPrefixOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getSuffixOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuffixOptions');
        return $pluginInfo ? $this->___callPlugins('getSuffixOptions', func_get_args(), $pluginInfo) : parent::getSuffixOptions();
    }
}
