<?php
namespace Magento\CatalogPermissions\Block\Adminhtml\Catalog\Category\Tab\Permissions\Row;

/**
 * Interceptor class for @see \Magento\CatalogPermissions\Block\Adminhtml\Catalog\Category\Tab\Permissions\Row
 */
class Interceptor extends \Magento\CatalogPermissions\Block\Adminhtml\Catalog\Category\Tab\Permissions\Row implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTree, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Store\Model\ResourceModel\Website\CollectionFactory $websiteCollectionFactory, \Magento\Customer\Model\ResourceModel\Group\CollectionFactory $groupCollectionFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $categoryTree, $registry, $categoryFactory, $websiteCollectionFactory, $groupCollectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canEditWebsites()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEditWebsites');
        return $pluginInfo ? $this->___callPlugins('canEditWebsites', func_get_args(), $pluginInfo) : parent::canEditWebsites();
    }
}
