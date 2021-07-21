<?php
namespace Dotdigitalgroup\Email\Model\Apiconnector\CustomerDataFieldProvider;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Apiconnector\CustomerDataFieldProvider
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Apiconnector\CustomerDataFieldProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalDataFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalDataFields');
        return $pluginInfo ? $this->___callPlugins('getAdditionalDataFields', func_get_args(), $pluginInfo) : parent::getAdditionalDataFields();
    }
}
