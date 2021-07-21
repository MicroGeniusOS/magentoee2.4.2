<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);
namespace Tribugs\InstagramFeed\Model\Config;

use DOMNode;
use LogicException;

/**
 * Class Converter
 * @package Tribugs\InstagramFeed\Model\Config
 */
class Converter extends \Magento\Widget\Model\Config\Converter
{
    /**
     * Convert dom Depends node to Magento array
     *
     * @param DOMNode $source
     *
     * @return array
     * @throws LogicException
     */
    protected function _convertDepends($source)
    {
        $depends = [];
        foreach ($source->childNodes as $childNode) {
            if ($childNode->nodeName === '#text') {
                continue;
            }
            if ($childNode->nodeName !== 'parameter') {
                throw new LogicException(
                    sprintf("Only 'parameter' node can be child of 'depends' node, %s found", $childNode->nodeName)
                );
            }
            $parameterAttributes = $childNode->attributes;
            $dependencyName = $parameterAttributes->getNamedItem('name')->nodeValue;
            $dependencyValue = $parameterAttributes->getNamedItem('value')->nodeValue;

            if (!isset($depends[$dependencyName])) {
                $depends[$dependencyName] = [
                    'value' => $dependencyValue,
                ];

                continue;
            }
            if (!isset($depends[$dependencyName]['values'])) {
                $depends[$dependencyName]['values'] = [$depends[$dependencyName]['value']];
                unset($depends[$dependencyName]['value']);
            }

            $depends[$dependencyName]['values'][] = $dependencyValue;
        }

        return $depends;
    }
}
