<?php
namespace Dotdigitalgroup\Email\Model\Connector\Datafield;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Connector\Datafield
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Connector\Datafield implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($helper);
    }

    /**
     * {@inheritdoc}
     */
    public function getContactDatafields(bool $withXmlPathPrefixes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContactDatafields');
        return $pluginInfo ? $this->___callPlugins('getContactDatafields', func_get_args(), $pluginInfo) : parent::getContactDatafields($withXmlPathPrefixes);
    }
}
