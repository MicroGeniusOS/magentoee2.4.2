<?php
namespace Magento\Company\Model\Authorization;

/**
 * Interceptor class for @see \Magento\Company\Model\Authorization
 */
class Interceptor extends \Magento\Company\Model\Authorization implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Authorization\PolicyInterface $aclPolicy, \Magento\Framework\Authorization\RoleLocatorInterface $roleLocator)
    {
        $this->___init();
        parent::__construct($aclPolicy, $roleLocator);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed($resource, $privilege = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed($resource, $privilege);
    }
}
