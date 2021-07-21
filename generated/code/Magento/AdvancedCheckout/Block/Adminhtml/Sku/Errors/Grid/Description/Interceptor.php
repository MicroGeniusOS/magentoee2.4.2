<?php
namespace Magento\AdvancedCheckout\Block\Adminhtml\Sku\Errors\Grid\Description;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Block\Adminhtml\Sku\Errors\Grid\Description
 */
class Interceptor extends \Magento\AdvancedCheckout\Block\Adminhtml\Sku\Errors\Grid\Description implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\AdvancedCheckout\Helper\Data $checkoutData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $checkoutData, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigureButtonHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigureButtonHtml');
        return $pluginInfo ? $this->___callPlugins('getConfigureButtonHtml', func_get_args(), $pluginInfo) : parent::getConfigureButtonHtml();
    }
}
