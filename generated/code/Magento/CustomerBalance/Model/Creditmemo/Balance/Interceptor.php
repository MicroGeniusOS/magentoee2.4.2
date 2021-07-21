<?php
namespace Magento\CustomerBalance\Model\Creditmemo\Balance;

/**
 * Interceptor class for @see \Magento\CustomerBalance\Model\Creditmemo\Balance
 */
class Interceptor extends \Magento\CustomerBalance\Model\Creditmemo\Balance implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerBalance\Model\BalanceFactory $balanceFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($balanceFactory, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Sales\Model\Order\Creditmemo $creditmemo) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($creditmemo);
    }
}
