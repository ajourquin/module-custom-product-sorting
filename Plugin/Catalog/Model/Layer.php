<?php

/**
 * @author Aurélien Jourquin <aurelien@growzup.com>
 * @link http://www.ajourquin.com
 */

declare(strict_types=1);

namespace Ajourquin\CustomProductSorting\Plugin\Catalog\Model;

use Magento\Catalog\Block\Product\ProductList\Toolbar as MagentoToolbar;
use Magento\Catalog\Model\Layer as MagentoLayer;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Framework\Api\SortOrder;

class Layer
{
    /** @var MagentoToolbar */
    private $toolbar;

    /**
     * Layer constructor.
     * @param MagentoToolbar $toolbar
     */
    public function __construct(
        MagentoToolbar $toolbar
    ) {
        $this->toolbar = $toolbar;
    }

    /**
     * @param MagentoLayer $subject
     * @param ProductCollection $collection
     * @return array
     */
    public function beforePrepareProductCollection(MagentoLayer $subject, ProductCollection $collection): array
    {
        $currentOrder = $this->toolbar->getCurrentOrder();

        switch ($currentOrder) {
            case 'custom_value':
                $collection->setOrder('price', 'desc');
                $collection->setOrder('name', SortOrder::SORT_ASC);

                break;
        }

        return [$collection];
    }
}
