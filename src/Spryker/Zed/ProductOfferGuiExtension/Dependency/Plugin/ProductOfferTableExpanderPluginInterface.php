<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductOfferGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

/**
 * Allows to extend the product offer table.
 */
interface ProductOfferTableExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands product offer table query criteria.
     * - Added joins must match at most one row per product offer, otherwise offers are listed more than once and the page shows fewer offers.
     *
     * @api
     */
    public function expandQueryCriteria(QueryCriteriaTransfer $queryCriteriaTransfer): QueryCriteriaTransfer;

    /**
     * Specification:
     * - Expands product offer table configuration.
     *
     * @api
     */
    public function expandTableConfiguration(TableConfiguration $config): TableConfiguration;

    /**
     * Specification:
     * - Expands product offer table view data.
     *
     * @api
     *
     * @param array<string, mixed> $rowData
     * @param array<string, mixed> $productOfferData
     *
     * @return array<string, mixed>
     */
    public function expandData(array $rowData, array $productOfferData): array;
}
