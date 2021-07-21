<?php
namespace Magento\BannerPageBuilder\Controller\Adminhtml\ContentType\DynamicBlock\Metadata;

/**
 * Interceptor class for @see \Magento\BannerPageBuilder\Controller\Adminhtml\ContentType\DynamicBlock\Metadata
 */
class Interceptor extends \Magento\BannerPageBuilder\Controller\Adminhtml\ContentType\DynamicBlock\Metadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Banner\Model\ResourceModel\Banner\Collection $blockCollection, \Magento\SalesRule\Model\ResourceModel\Rule\Collection $cartRuleCollection, \Magento\CatalogRule\Model\ResourceModel\Rule\Collection $catalogRuleCollection, \Magento\CustomerSegment\Model\ResourceModel\Segment\Collection $customerSegmentCollection, \Magento\BannerCustomerSegment\Model\ResourceModel\BannerSegmentLink $bannerSegmentLink, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $blockCollection, $cartRuleCollection, $catalogRuleCollection, $customerSegmentCollection, $bannerSegmentLink, $logger);
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
