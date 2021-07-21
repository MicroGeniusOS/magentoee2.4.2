<?php
namespace Magento\NegotiableQuote\Helper\Quote;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Helper\Quote
 */
class Interceptor extends \Magento\NegotiableQuote\Helper\Quote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRepository, \Magento\NegotiableQuote\Model\Restriction\RestrictionInterface $restriction, \Magento\Company\Api\CompanyManagementInterface $companyManagement, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\NegotiableQuote\Api\NegotiableQuoteManagementInterface $negotiableQuoteManagement, \Magento\Company\Api\AuthorizationInterface $authorization, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\NegotiableQuote\Model\PriceFormatter $priceFormatter, \Magento\NegotiableQuote\Model\Quote\ViewAccessInterface $viewAccess)
    {
        $this->___init();
        parent::__construct($context, $stockRepository, $restriction, $companyManagement, $quoteRepository, $negotiableQuoteManagement, $authorization, $userContext, $priceFormatter, $viewAccess);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormattedCatalogPrice(\Magento\Quote\Api\Data\CartItemInterface $item, $quoteCurrency = null, $baseCurrency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormattedCatalogPrice');
        return $pluginInfo ? $this->___callPlugins('getFormattedCatalogPrice', func_get_args(), $pluginInfo) : parent::getFormattedCatalogPrice($item, $quoteCurrency, $baseCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemTotal(\Magento\Quote\Api\Data\CartItemInterface $item, $quoteCurrency = null, $baseCurrency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemTotal');
        return $pluginInfo ? $this->___callPlugins('getItemTotal', func_get_args(), $pluginInfo) : parent::getItemTotal($item, $quoteCurrency, $baseCurrency);
    }
}
