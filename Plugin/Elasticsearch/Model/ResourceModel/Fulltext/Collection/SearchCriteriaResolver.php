<?php

/**
 * @author Aurélien Jourquin <aurelien@growzup.com>
 * @link http://www.ajourquin.com
 */

declare(strict_types=1);

namespace Ajourquin\CustomProductSorting\Plugin\Elasticsearch\Model\ResourceModel\Fulltext\Collection;

use Magento\Elasticsearch\Model\ResourceModel\Fulltext\Collection\SearchCriteriaResolver as MagentoSearchCriteriaResolver;
use Magento\Framework\Api\Search\SearchCriteria;

class SearchCriteriaResolver
{
    /**
     * @param MagentoSearchCriteriaResolver $subject
     * @param SearchCriteria $result
     * @return SearchCriteria
     */
    public function afterResolve(MagentoSearchCriteriaResolver $subject, SearchCriteria $result): SearchCriteria
    {
        $sortOrders = $result->getSortOrders();
        unset($sortOrders['custom_value']);
        $result->setSortOrders($sortOrders);

        return $result;
    }
}
