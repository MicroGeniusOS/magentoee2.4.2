<?php
namespace Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Product\TierPrice\Save;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Product\TierPrice\Save
 */
class Interceptor extends \Magento\SharedCatalog\Controller\Adminhtml\SharedCatalog\Configure\Product\TierPrice\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Locale\FormatInterface $format, \Magento\SharedCatalog\Model\Form\Storage\WizardFactory $wizardStorageFactory, \Magento\SharedCatalog\Model\ProductItemTierPriceValidator $productItemTierPriceValidator, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $format, $wizardStorageFactory, $productItemTierPriceValidator, $productRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
