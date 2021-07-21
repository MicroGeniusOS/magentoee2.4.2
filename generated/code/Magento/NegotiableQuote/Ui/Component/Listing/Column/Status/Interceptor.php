<?php
namespace Magento\NegotiableQuote\Ui\Component\Listing\Column\Status;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Ui\Component\Listing\Column\Status
 */
class Interceptor extends \Magento\NegotiableQuote\Ui\Component\Listing\Column\Status implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\NegotiableQuote\Model\Status\LabelProviderInterface $labelProvider, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $labelProvider, $components, $data);
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
