<?php
namespace Magento\ConfigurableProduct\Block\DataProviders\PermissionsData;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Block\DataProviders\PermissionsData
 */
class Interceptor extends \Magento\ConfigurableProduct\Block\DataProviders\PermissionsData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\AuthorizationInterface $authorization)
    {
        $this->___init();
        parent::__construct($authorization);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowedToManageAttributes() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowedToManageAttributes');
        return $pluginInfo ? $this->___callPlugins('isAllowedToManageAttributes', func_get_args(), $pluginInfo) : parent::isAllowedToManageAttributes();
    }
}
