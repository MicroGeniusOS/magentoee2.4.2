<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CompanyGraphQl\Model\Company\Role;

use Magento\Company\Model\ResourceModel\Permission\Collection as PermissionCollection;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;

/**
 * Class Validate company role input
 */
class ValidateRole
{
    public const ROLE_NAME_LENGTH = 40;

    /**
     * @var array
     */
    private $requiredFields = [];

    /**
     * @var PermissionCollection
     */
    private $permissionCollection;

    /**
     * @param PermissionCollection $permissionCollection
     */
    public function __construct(PermissionCollection $permissionCollection)
    {
        $this->permissionCollection = $permissionCollection;
    }

    /**
     * Validate role input data
     *
     * @param array $roleData
     * @throws GraphQlInputException
     */
    public function execute(array $roleData)
    {
        $errorInput = [];
        foreach ($this->requiredFields as $field) {
            if (!isset($roleData[$field]) || empty($roleData[$field])) {
                $errorInput[] = $field;
            }
        }

        if ($errorInput) {
            throw new GraphQlInputException(
                __('Required parameters are missing: %1.', [implode(', ', $errorInput)])
            );
        }

        if (isset($roleData['name']) && !$this->validateRoleName($roleData['name'])) {
            throw new GraphQlInputException(
                __('Field name cannot be longer than ' . self::ROLE_NAME_LENGTH . ' characters')
            );
        }

        if (isset($roleData['permissions'])) {
            $this->validateResources($roleData['permissions']);
        }
    }

    /**
     * Add required field list
     *
     * @param array $fieldNames
     */
    public function addRequiredFields(array $fieldNames)
    {
        $this->requiredFields = array_merge($this->requiredFields, $fieldNames);
    }

    /**
     * Validate role name
     *
     * @param string $roleName
     * @return bool
     */
    private function validateRoleName(string $roleName): bool
    {
        return self::ROLE_NAME_LENGTH >= strlen($roleName);
    }

    /**
     * Validate a list of role permission resources
     *
     * @param array $resourcesList
     * @throws GraphQlInputException
     */
    private function validateResources(array $resourcesList)
    {
        $errorInput = [];
        $resources = $this->permissionCollection->getColumnValues('resource_id');
        foreach ($resourcesList as $resource) {
            if (!in_array($resource, $resources, true)) {
                $errorInput[] = $resource;
            }
        }
        if ($errorInput) {
            throw new GraphQlInputException(
                __('Invalid role permission resources: %1.', [implode(', ', $errorInput)])
            );
        }
    }
}
