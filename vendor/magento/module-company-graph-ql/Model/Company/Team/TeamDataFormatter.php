<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyGraphQl\Model\Company\Team;

use Laminas\Validator\LessThan;
use Magento\Company\Model\Company\Team\Authorization;
use Magento\Company\Model\Company\Structure;
use Magento\CompanyGraphQl\Model\Company\IdEncoder;
use Magento\Framework\GraphQl\Exception\GraphQlAuthorizationException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;

/**
 * Class for validate and format data for further handling
 */
class TeamDataFormatter
{
    /**
     * Default parent id of structure
     */
    private const DEFAULT_PARENT_ID = 0;

    /**
     * Max length of team name field
     */
    private const TEAM_NAME_MAX_LENGTH = 40;

    /**
     * @var Structure
     */
    private $structure;

    /**
     * @var Authorization
     */
    private $authorization;

    /**
     * @var IdEncoder
     */
    private $idEncoder;

    /**
     * @param Structure $structure
     * @param Authorization $authorization
     * @param IdEncoder $idEncoder
     */
    public function __construct(
        Structure $structure,
        Authorization $authorization,
        IdEncoder $idEncoder
    ) {
        $this->structure = $structure;
        $this->authorization = $authorization;
        $this->idEncoder = $idEncoder;
    }

    /**
     * Prepare data for team creation
     *
     * @param int $userId
     * @param array $teamInputData
     * @return array
     * @throws GraphQlAuthorizationException
     * @throws GraphQlInputException
     */
    public function prepareCreateData(int $userId, array $teamInputData): array
    {
        if (!isset($teamInputData['target_id'])) {
            $structure = $this->structure->getStructureByCustomerId($userId);
            $teamInputData['target_id'] = $structure ? (int)$structure->getStructureId() : self::DEFAULT_PARENT_ID;
        }

        $teamInputData['name'] = trim($teamInputData['name']);
        $teamInputData['description'] = isset($teamInputData['description']) ? trim($teamInputData['description']) : '';

        if (empty($teamInputData['name'])) {
            throw new GraphQlInputException(
                __(
                    'Invalid value of "%1" provided for the name field.',
                    $teamInputData['name']
                )
            );
        }

        $this->checkMaxLenghtOfName($teamInputData['name']);

        if (!$this->authorization->isAllowedToCreateTeam($userId, (int) $teamInputData['target_id'])) {
            throw new GraphQlAuthorizationException(
                __('You do not have permission to create a team from the specified target ID.')
            );
        }

        return $teamInputData;
    }

    /**
     * Prepare data for team update
     *
     * @param int $userId
     * @param array $teamInputData
     * @return array
     * @throws GraphQlAuthorizationException
     * @throws GraphQlInputException
     */
    public function prepareUpdateData(int $userId, array $teamInputData): array
    {
        $teamInputData['id'] = (int)$this->idEncoder->decode((string)$teamInputData['id']);

        if (!$this->authorization->isAllowedToUpdateTeam($userId, $teamInputData['id'])) {
            throw new GraphQlAuthorizationException(
                __('You are not authorized to update the team.')
            );
        }
        if (isset($teamInputData['name'])) {
            $teamInputData['name'] = trim($teamInputData['name']);
            if (empty($teamInputData['name'])) {
                throw new GraphQlInputException(
                    __(
                        'Invalid value of "%1" provided for the name field.',
                        $teamInputData['name']
                    )
                );
            }
            $this->checkMaxLenghtOfName($teamInputData['name']);
        }

        if (isset($teamInputData['description'])) {
            $teamInputData['description'] = trim($teamInputData['description']);
        }

        return $teamInputData;
    }

    /**
     * Check max length of name field
     *
     * @param string $name
     * @throws GraphQlInputException
     */
    private function checkMaxLenghtOfName(string $name): void
    {
        $lengthValidator = new LessThan(['max' => self::TEAM_NAME_MAX_LENGTH]);
        if (!$lengthValidator->isValid(strlen($name))) {
            throw new GraphQlInputException(__(
                'Company team name must not be more than %1 characters.',
                self::TEAM_NAME_MAX_LENGTH
            ));
        }
    }
}
