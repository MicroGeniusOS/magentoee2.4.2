<?php
namespace Magento\LoginAsCustomerAdminUi\Ui\Customer\Component\ConfirmationPopup\Options;

/**
 * Interceptor class for @see \Magento\LoginAsCustomerAdminUi\Ui\Customer\Component\ConfirmationPopup\Options
 */
class Interceptor extends \Magento\LoginAsCustomerAdminUi\Ui\Customer\Component\ConfirmationPopup\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Escaper $escaper, \Magento\Framework\App\RequestInterface $request, \Magento\Customer\Model\Config\Share $share, \Magento\Store\Model\System\Store $systemStore, ?\Magento\Sales\Api\OrderRepositoryInterface $orderRepository = null, ?\Magento\Sales\Api\InvoiceRepositoryInterface $invoiceRepository = null, ?\Magento\Sales\Api\ShipmentRepositoryInterface $shipmentRepository = null, ?\Magento\Sales\Api\CreditmemoRepositoryInterface $creditmemoRepository = null)
    {
        $this->___init();
        parent::__construct($customerRepository, $escaper, $request, $share, $systemStore, $orderRepository, $invoiceRepository, $shipmentRepository, $creditmemoRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
