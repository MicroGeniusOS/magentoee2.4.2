<?php
namespace Magento\Company\Model\Company\DataProvider;

/**
 * Interceptor class for @see \Magento\Company\Model\Company\DataProvider
 */
class Interceptor extends \Magento\Company\Model\Company\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Company\Model\ResourceModel\Company\CollectionFactory $companyCollectionFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Eav\Model\Config $eavConfig, \Magento\Customer\Model\AttributeMetadataResolver $attributeMetadataResolver, array $meta = [], array $data = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $companyCollectionFactory, $extensionAttributesJoinProcessor, $customerRepository, $eavConfig, $attributeMetadataResolver, $meta, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsData(\Magento\Company\Api\Data\CompanyInterface $company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSettingsData');
        return $pluginInfo ? $this->___callPlugins('getSettingsData', func_get_args(), $pluginInfo) : parent::getSettingsData($company);
    }

    /**
     * {@inheritdoc}
     */
    public function getCompanyResultData(\Magento\Company\Api\Data\CompanyInterface $company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCompanyResultData');
        return $pluginInfo ? $this->___callPlugins('getCompanyResultData', func_get_args(), $pluginInfo) : parent::getCompanyResultData($company);
    }
}
