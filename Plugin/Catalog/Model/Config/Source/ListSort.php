<?php declare(strict_types = 1);

/**
 * @author    Aurélien Jourquin <aurelien@growzup.com>
 * @link      http://www.ajourquin.com
 */

namespace Ajourquin\CustomProductSorting\Plugin\Catalog\Model\Config\Source;

use Magento\Catalog\Model\Config\Source\ListSort as MagentoListSort;

class ListSort
{
    /**
     * @param MagentoListSort $subject
     * @param array $result
     * @return array
     */
    public function afterToOptionArray(MagentoListSort $subject, array $result): array
    {
        \array_push($result, ['label' => __('Custom Value'), 'value' => 'custom_value']);

        return $result;
    }
}
