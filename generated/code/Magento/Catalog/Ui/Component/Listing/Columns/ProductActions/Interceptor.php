<?php
namespace Magento\Catalog\Ui\Component\Listing\Columns\ProductActions;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\Component\Listing\Columns\ProductActions
 */
class Interceptor extends \Magento\Catalog\Ui\Component\Listing\Columns\ProductActions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $urlBuilder, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareDataSource(array $dataSource)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareDataSource');
        return $pluginInfo ? $this->___callPlugins('prepareDataSource', func_get_args(), $pluginInfo) : parent::prepareDataSource($dataSource);
    }
}
