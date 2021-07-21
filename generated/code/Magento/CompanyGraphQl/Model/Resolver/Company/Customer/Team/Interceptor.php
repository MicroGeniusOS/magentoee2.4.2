<?php
namespace Magento\CompanyGraphQl\Model\Resolver\Company\Customer\Team;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\Company\Customer\Team
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\Company\Customer\Team implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Users\Formatter $formatter)
    {
        $this->___init();
        parent::__construct($formatter);
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
