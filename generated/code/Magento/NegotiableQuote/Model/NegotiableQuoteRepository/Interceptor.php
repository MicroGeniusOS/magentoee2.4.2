<?php
namespace Magento\NegotiableQuote\Model\NegotiableQuoteRepository;

/**
 * Interceptor class for @see \Magento\NegotiableQuote\Model\NegotiableQuoteRepository
 */
class Interceptor extends \Magento\NegotiableQuote\Model\NegotiableQuoteRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterfaceFactory $negotiableQuoteFactory, \Magento\NegotiableQuote\Model\ResourceModel\NegotiableQuote $negotiableQuoteResource, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\NegotiableQuote\Model\Query\GetList $negotiableQuoteList, \Magento\NegotiableQuote\Model\Validator\ValidatorInterfaceFactory $validatorFactory)
    {
        $this->___init();
        parent::__construct($negotiableQuoteFactory, $negotiableQuoteResource, $userContext, $negotiableQuoteList, $validatorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface $negotiableQuote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($negotiableQuote);
    }
}
