<?php
namespace Magento\RmaGraphQl\Model\Resolver\CustomerOrder\Item\IsEligible;

/**
 * Interceptor class for @see \Magento\RmaGraphQl\Model\Resolver\CustomerOrder\Item\IsEligible
 */
class Interceptor extends \Magento\RmaGraphQl\Model\Resolver\CustomerOrder\Item\IsEligible implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Rma\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($productRepository, $storeManager, $helper);
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
