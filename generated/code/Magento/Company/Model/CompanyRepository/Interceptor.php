<?php
namespace Magento\Company\Model\CompanyRepository;

/**
 * Interceptor class for @see \Magento\Company\Model\CompanyRepository
 */
class Interceptor extends \Magento\Company\Model\CompanyRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Api\Data\CompanyInterfaceFactory $companyFactory, \Magento\Company\Model\Company\Delete $companyDeleter, \Magento\Company\Model\Company\GetList $companyListGetter, \Magento\Company\Model\Company\Save $companySaver)
    {
        $this->___init();
        parent::__construct($companyFactory, $companyDeleter, $companyListGetter, $companySaver);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Company\Api\Data\CompanyInterface $company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($company);
    }

    /**
     * {@inheritdoc}
     */
    public function get($companyId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($companyId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Company\Api\Data\CompanyInterface $company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($company);
    }
}
