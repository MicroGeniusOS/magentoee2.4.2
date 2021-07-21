<?php
namespace Magento\AdvancedCheckout\Block\Customer\Link;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Block\Customer\Link
 */
class Interceptor extends \Magento\AdvancedCheckout\Block\Customer\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\DefaultPathInterface $defaultPath, \Magento\AdvancedCheckout\Helper\Data $customerHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $defaultPath, $customerHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
