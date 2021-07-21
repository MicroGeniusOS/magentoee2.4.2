<?php
namespace Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyTeam;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyTeam
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\UpdateCompanyTeam implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Api\TeamRepositoryInterface $teamRepository, \Magento\CompanyGraphQl\Model\Company\Team\ExtractTeamData $extractTeamData, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess, \Magento\CompanyGraphQl\Model\Company\IdEncoder $idEncoder, \Magento\CompanyGraphQl\Model\Company\Team\TeamDataFormatter $teamDataFormatter)
    {
        $this->___init();
        parent::__construct($teamRepository, $extractTeamData, $resolverAccess, $idEncoder, $teamDataFormatter);
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
