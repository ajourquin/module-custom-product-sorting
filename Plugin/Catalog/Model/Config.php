<?php

/**
 * @author Aurélien Jourquin <aurelien@growzup.com>
 * @link http://www.ajourquin.com
 */

declare(strict_types=1);

namespace Ajourquin\CustomProductSorting\Plugin\Catalog\Model;

use Magento\Catalog\Model\Config as MagentoConfig;

class Config
{
    /**
     * @param MagentoConfig $subject
     * @param array $result
     * @return array
     */
    public function afterGetAttributeUsedForSortByArray(MagentoConfig $subject, array $result): array
    {
        $result['custom_value'] = \__('Custom value');

        return $result;
    }
}
