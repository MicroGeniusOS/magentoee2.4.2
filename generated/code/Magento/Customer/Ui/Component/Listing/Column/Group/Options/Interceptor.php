<?php
namespace Magento\Customer\Ui\Component\Listing\Column\Group\Options;

/**
 * Interceptor class for @see \Magento\Customer\Ui\Component\Listing\Column\Group\Options
 */
class Interceptor extends \Magento\Customer\Ui\Component\Listing\Column\Group\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\ResourceModel\Group\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
