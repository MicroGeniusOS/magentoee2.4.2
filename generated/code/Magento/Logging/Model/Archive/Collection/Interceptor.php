<?php
namespace Magento\Logging\Model\Archive\Collection;

/**
 * Interceptor class for @see \Magento\Logging\Model\Archive\Collection
 */
class Interceptor extends \Magento\Logging\Model\Archive\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Logging\Model\Archive $archive, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($entityFactory, $archive, $localeResolver, $filesystem);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
