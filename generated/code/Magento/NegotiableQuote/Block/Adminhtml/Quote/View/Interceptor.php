<?php
namespace Magento\NegotiableQuote\Block\Adminhtml\Quote\View;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Block\Adminhtml\Quote\View
 */
class Interceptor extends \Magento\NegotiableQuote\Block\Adminhtml\Quote\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\NegotiableQuote\Model\Restriction\RestrictionInterface $restriction, array $data = [], ?\Magento\Framework\AuthorizationInterface $authorization = null)
    {
        $this->___init();
        parent::__construct($context, $restriction, $data, $authorization);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
