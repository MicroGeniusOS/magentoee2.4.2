<?php
namespace Magento\Staging\Controller\Adminhtml\Update\Save;

/**
 * Interceptor class for @see \Magento\Staging\Controller\Adminhtml\Update\Save
 */
class Interceptor extends \Magento\Staging\Controller\Adminhtml\Update\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Staging\Api\UpdateRepositoryInterface $updateRepository, \Magento\Staging\Model\UpdateFactory $updateFactory, ?\Magento\Staging\Model\ResourceModel\Db\CampaignValidator $campaignValidator = null, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $updateRepository, $updateFactory, $campaignValidator, $escaper);
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
