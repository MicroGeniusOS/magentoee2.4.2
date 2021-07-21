<?php
namespace Magento\CompanyGraphQl\Model\Resolver\CreateCompanyTeam;

/**
 * Interceptor class for @see \Magento\CompanyGraphQl\Model\Resolver\CreateCompanyTeam
 */
class Interceptor extends \Magento\CompanyGraphQl\Model\Resolver\CreateCompanyTeam implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompanyGraphQl\Model\Company\Team\ExtractTeamData $extractTeamData, \Magento\Company\Api\CompanyManagementInterface $companyManagement, \Magento\Company\Model\Company\Structure $structure, \Magento\CompanyGraphQl\Model\Company\Team\TeamDataFormatter $dataFormatter, \Magento\Company\Api\Data\TeamInterfaceFactory $teamFactory, \Magento\Company\Api\TeamRepositoryInterface $teamRepository, \Magento\CompanyGraphQl\Model\Company\ResolverAccess $resolverAccess)
    {
        $this->___init();
        parent::__construct($extractTeamData, $companyManagement, $structure, $dataFormatter, $teamFactory, $teamRepository, $resolverAccess);
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
