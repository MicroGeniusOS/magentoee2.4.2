<?php
namespace Magento\Catalog\Model\Product\ReservedAttributeList;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\ReservedAttributeList
 */
class Interceptor extends \Magento\Catalog\Model\Product\ReservedAttributeList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($productModel, array $reservedAttributes = [], array $allowedAttributes = [])
    {
        $this->___init();
        parent::__construct($productModel, $reservedAttributes, $allowedAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function isReservedAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReservedAttribute');
        return $pluginInfo ? $this->___callPlugins('isReservedAttribute', func_get_args(), $pluginInfo) : parent::isReservedAttribute($attribute);
    }
}
