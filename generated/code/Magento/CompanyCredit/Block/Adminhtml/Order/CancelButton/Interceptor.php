<?php
namespace Magento\CompanyCredit\Block\Adminhtml\Order\CancelButton;

/**
 * Interceptor class for @see \Magento\CompanyCredit\Block\Adminhtml\Order\CancelButton
 */
class Interceptor extends \Magento\CompanyCredit\Block\Adminhtml\Order\CancelButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Model\Config $salesConfig, \Magento\Sales\Helper\Reorder $reorderHelper, \Magento\CompanyCredit\Model\CompanyStatus $companyStatus, \Magento\CompanyCredit\Model\CompanyOrder $companyOrder, \Magento\Company\Api\CompanyRepositoryInterface $companyRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $salesConfig, $reorderHelper, $companyStatus, $companyOrder, $companyRepository, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addButton($buttonId, $data, $level = 0, $sortOrder = 0, $region = 'toolbar')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addButton');
        return $pluginInfo ? $this->___callPlugins('addButton', func_get_args(), $pluginInfo) : parent::addButton($buttonId, $data, $level, $sortOrder, $region);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
