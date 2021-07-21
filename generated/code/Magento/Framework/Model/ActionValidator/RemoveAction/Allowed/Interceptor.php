<?php
namespace Magento\Framework\Model\ActionValidator\RemoveAction\Allowed;

/**
 * Interceptor class for @see \Magento\Framework\Model\ActionValidator\RemoveAction\Allowed
 */
class Interceptor extends \Magento\Framework\Model\ActionValidator\RemoveAction\Allowed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Registry $registry, array $protectedModels = [])
    {
        $this->___init();
        parent::__construct($registry, $protectedModels);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed(\Magento\Framework\Model\AbstractModel $model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed($model);
    }
}
