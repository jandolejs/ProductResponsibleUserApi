<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api\Data;

interface ProductResponsibleUserApiSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get ProductResponsibleUser list.
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface[]
     */
    public function getItems();

    /**
     * Set user_id list.
     * @param \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

