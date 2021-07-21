<?php
namespace Magento\Company\Model\Company\Structure;

/**
 * Interceptor class for @see \Magento\Company\Model\Company\Structure
 */
class Interceptor extends \Magento\Company\Model\Company\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\ResourceModel\Structure\Tree $tree, \Magento\Company\Api\Data\StructureInterfaceFactory $structureFactory, \Magento\Company\Model\StructureRepository $structureRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Company\Api\TeamRepositoryInterface $teamRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface)
    {
        $this->___init();
        parent::__construct($tree, $structureFactory, $structureRepository, $searchCriteriaBuilder, $teamRepository, $customerRepositoryInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedIds($userId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedIds');
        return $pluginInfo ? $this->___callPlugins('getAllowedIds', func_get_args(), $pluginInfo) : parent::getAllowedIds($userId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedChildrenIds($parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedChildrenIds');
        return $pluginInfo ? $this->___callPlugins('getAllowedChildrenIds', func_get_args(), $pluginInfo) : parent::getAllowedChildrenIds($parentId);
    }
}
