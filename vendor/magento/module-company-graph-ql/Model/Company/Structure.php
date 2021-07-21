<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyGraphQl\Model\Company;

use Magento\Company\Api\Data\HierarchyInterface;
use Magento\Company\Api\Data\StructureInterface;
use Magento\Company\Api\Data\TeamInterface;
use Magento\Company\Model\StructureRepository;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData;
use Magento\Framework\Data\Tree\Node;

/**
 * Structure data provider
 */
class Structure
{
    /**
     * @var int
     */
    private $allowedDepth;

    /**
     * @var int
     */
    private $depth = 0;

    /**
     * @var array
     */
    private $structure = [];

    /**
     * @var IdEncoder
     */
    private $idEncoder;

    /**
     * @var ExtractCustomerData
     */
    private $customerData;

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var StructureRepository
     */
    private $structureRepository;

    /**
     * @param ExtractCustomerData $customerData
     * @param CustomerRepositoryInterface $customerRepository
     * @param IdEncoder $idEncoder
     * @param StructureRepository $structureRepository
     */
    public function __construct(
        ExtractCustomerData $customerData,
        CustomerRepositoryInterface $customerRepository,
        IdEncoder $idEncoder,
        StructureRepository $structureRepository
    ) {
        $this->customerData = $customerData;
        $this->customerRepository = $customerRepository;
        $this->idEncoder = $idEncoder;
        $this->structureRepository = $structureRepository;
    }

    /**
     * Get team parent customer structure.
     *
     * @param StructureInterface $structure
     * @return StructureInterface|null
     */
    public function getTeamParentCustomerStructure(StructureInterface $structure): ?StructureInterface
    {
        if ($structure) {
            $entityType = $structure->getEntityType();
            if ((int)$entityType === StructureInterface::TYPE_CUSTOMER) {
                return $structure;
            }

            if ((int)$entityType === StructureInterface::TYPE_TEAM &&
                $parentId = $structure->getParentId()) {
                return $this->getTeamParentCustomerStructure($this->structureRepository->get($parentId));
            }
        }

        return null;
    }

    /**
     * Get formatted structure
     *
     * @param Node $tree
     * @param int $allowedDepth
     * @return array
     */
    public function getStructureItems(Node $tree, int $allowedDepth): array
    {
        $this->allowedDepth = $allowedDepth;
        $this->getTreeAsArray($tree);
        return $this->structure;
    }

    /**
     * Prepare tree array.
     *
     * @param Node $tree
     * @return void
     */
    private function getTreeAsArray(Node $tree): void
    {
        $this->structure[] = $this->getTreeItemAsArray($tree);
        if ($this->allowedDepth > $this->depth && $tree->hasChildren()) {
            $this->depth++;
            foreach ($tree->getChildren() as $child) {
                $this->getTreeAsArray($child);
            }
        }
    }

    /**
     * Get tree item as array.
     *
     * @param Node $tree
     * @return array
     */
    private function getTreeItemAsArray(Node $tree): array
    {
        $data = [];
        $data['id'] = $this->idEncoder->encode((string)$tree->getData(StructureInterface::STRUCTURE_ID));
        $data['parent_id'] = $this->idEncoder->encode((string)$tree->getData(StructureInterface::PARENT_ID));
        if ((int)$tree->getData(StructureInterface::ENTITY_TYPE) === StructureInterface::TYPE_TEAM) {
            $data['entity']['type'] = HierarchyInterface::TYPE_TEAM;
            $data['entity']['id'] = $this->idEncoder->encode($tree->getData(TeamInterface::TEAM_ID));
            $data['entity']['name'] = $tree->getData(TeamInterface::NAME);
            $data['entity']['description'] = $tree->getData(TeamInterface::DESCRIPTION);
        } else {
            $data['entity'] = $this->customerData->execute($this->customerRepository->get(
                $tree->getData(CustomerInterface::EMAIL)
            ));
            $data['entity']['type'] = HierarchyInterface::TYPE_CUSTOMER;
        }
        return $data;
    }
}
