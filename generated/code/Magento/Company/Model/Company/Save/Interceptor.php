<?php
namespace Magento\Company\Model\Company\Save;

/**
 * Interceptor class for @see \Magento\Company\Model\Company\Save
 */
class Interceptor extends \Magento\Company\Model\Company\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\SaveHandlerPool $saveHandlerPool, \Magento\Company\Model\ResourceModel\Company $companyResource, \Magento\Company\Api\Data\CompanyInterfaceFactory $companyFactory, \Magento\Company\Model\SaveValidatorPool $saveValidatorPool, \Magento\User\Model\ResourceModel\User\CollectionFactory $userCollectionFactory)
    {
        $this->___init();
        parent::__construct($saveHandlerPool, $companyResource, $companyFactory, $saveValidatorPool, $userCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Company\Api\Data\CompanyInterface $company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($company);
    }
}
