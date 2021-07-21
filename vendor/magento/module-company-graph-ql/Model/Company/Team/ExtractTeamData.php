<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CompanyGraphQl\Model\Company\Team;

use Magento\Company\Api\Data\TeamInterface;
use Magento\CompanyGraphQl\Model\Company\IdEncoder;

/**
 * Class for extract team data into array.
 */
class ExtractTeamData
{
    /**
     * @var IdEncoder
     */
    private $idEncoder;

    /**
     * @param IdEncoder $idEncoder
     */
    public function __construct(
        IdEncoder $idEncoder
    ) {
        $this->idEncoder = $idEncoder;
    }

    /**
     * Extract team data into an array.
     *
     * @param TeamInterface $team
     * @return array
     */
    public function execute(TeamInterface $team): array
    {
        return [
            'id' => $this->idEncoder->encode((string)$team->getId()),
            'name' => $team->getName(),
            'description' => $team->getDescription()
        ];
    }
}
