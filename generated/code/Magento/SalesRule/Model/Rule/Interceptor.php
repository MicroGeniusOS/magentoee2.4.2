<?php
namespace Magento\SalesRule\Model\Rule;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule
 */
class Interceptor extends \Magento\SalesRule\Model\Rule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\SalesRule\Model\CouponFactory $couponFactory, \Magento\SalesRule\Model\Coupon\CodegeneratorFactory $codegenFactory, \Magento\SalesRule\Model\Rule\Condition\CombineFactory $condCombineFactory, \Magento\SalesRule\Model\Rule\Condition\Product\CombineFactory $condProdCombineF, \Magento\SalesRule\Model\ResourceModel\Coupon\Collection $couponCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory = null, ?\Magento\Framework\Api\AttributeValueFactory $customAttributeFactory = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $localeDate, $couponFactory, $codegenFactory, $condCombineFactory, $condProdCombineF, $couponCollection, $storeManager, $resource, $resourceCollection, $data, $extensionFactory, $customAttributeFactory, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getFromDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFromDate');
        return $pluginInfo ? $this->___callPlugins('getFromDate', func_get_args(), $pluginInfo) : parent::getFromDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getToDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getToDate');
        return $pluginInfo ? $this->___callPlugins('getToDate', func_get_args(), $pluginInfo) : parent::getToDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getConditionsFieldSetId($formName = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConditionsFieldSetId');
        return $pluginInfo ? $this->___callPlugins('getConditionsFieldSetId', func_get_args(), $pluginInfo) : parent::getConditionsFieldSetId($formName);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionsFieldSetId($formName = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionsFieldSetId');
        return $pluginInfo ? $this->___callPlugins('getActionsFieldSetId', func_get_args(), $pluginInfo) : parent::getActionsFieldSetId($formName);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
