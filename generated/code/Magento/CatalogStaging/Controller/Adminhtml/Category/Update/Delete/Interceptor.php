<?php
namespace Magento\CatalogStaging\Controller\Adminhtml\Category\Update\Delete;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Controller\Adminhtml\Category\Update\Delete
 */
class Interceptor extends \Magento\CatalogStaging\Controller\Adminhtml\Category\Update\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Staging\Model\Entity\Update\Delete $stagingUpdateDelete)
    {
        $this->___init();
        parent::__construct($context, $stagingUpdateDelete);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
