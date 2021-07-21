<?php
namespace Magento\Ui\Component\Form\AttributeMapper;

/**
 * Interceptor class for @see \Magento\Ui\Component\Form\AttributeMapper
 */
class Interceptor extends \Magento\Ui\Component\Form\AttributeMapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function map($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'map');
        return $pluginInfo ? $this->___callPlugins('map', func_get_args(), $pluginInfo) : parent::map($attribute);
    }
}
