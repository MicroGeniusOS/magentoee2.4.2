<?php
namespace Magento\Banner\Model\Banner\Validator;

/**
 * Interceptor class for @see \Magento\Banner\Model\Banner\Validator
 */
class Interceptor extends \Magento\Banner\Model\Banner\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManager $storeManager, \Magento\Backend\Helper\Js $jsHelper)
    {
        $this->___init();
        parent::__construct($storeManager, $jsHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareSaveData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareSaveData');
        return $pluginInfo ? $this->___callPlugins('prepareSaveData', func_get_args(), $pluginInfo) : parent::prepareSaveData($data);
    }
}
