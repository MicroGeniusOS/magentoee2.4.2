<?php
namespace Magento\CompanyGraphQl\Model\Resolver\CreateCompanyUser;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\CreateCompanyUser
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\CreateCompanyUser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Users\CreateCompanyUser $createCompanyUser, \Magento\CompanyGraphQl\Model\Company\Users\Formatter $formatter, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Helper\Data $helper, \Magento\CompanyGraphQl\Model\Company\Users\Validator $validator)
    {
        $this->___init();
        parent::__construct($createCompanyUser, $formatter, $idEncoder, $resolverAccess, $helper, $validator);
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
