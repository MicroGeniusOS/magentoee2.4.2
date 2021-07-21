<?php
namespace Magento\DownloadableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\DownloadableLinks;

/**
 * Interceptor class for @see \Magento\DownloadableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\DownloadableLinks
 */
class Interceptor extends \Magento\DownloadableRequisitionListGraphQl\Model\Resolver\RequisitionList\Item\DownloadableLinks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DownloadableGraphQl\Model\GetDownloadableProductLinks $getDownloadableProductLinks, \Magento\DownloadableGraphQl\Model\ConvertLinksToArray $convertLinksToArray)
    {
        $this->___init();
        parent::__construct($getDownloadableProductLinks, $convertLinksToArray);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
