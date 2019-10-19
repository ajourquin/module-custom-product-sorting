<?php declare(strict_types = 1);

/**
 * @author    Aurélien Jourquin <aurelien@growzup.com>
 * @link      http://www.ajourquin.com
 */

namespace Ajourquin\CustomProductSorting\Plugin\Catalog\Model\Category\Attribute\Source;

use Magento\Catalog\Model\Category\Attribute\Source\Sortby as MagentoSortby;

class Sortby
{
    /**
     * @param MagentoSortby $subject
     * @param array $result
     * @return array
     */
    public function afterGetAllOptions(MagentoSortby $subject, array $result): array
    {
        \array_push($result, ['label' => __('Custom Value'), 'value' => 'custom_value']);

        return $result;
    }
}
