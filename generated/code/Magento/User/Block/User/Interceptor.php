<?php
namespace Magento\User\Block\User;

/**
 * Interceptor class for @see \Magento\User\Block\User
 */
class Interceptor extends \Magento\User\Block\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\User\Model\ResourceModel\User $resourceModel, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resourceModel, $data);
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
