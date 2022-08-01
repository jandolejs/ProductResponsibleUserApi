<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api\Data;

interface ProductResponsibleUserApiInterface
{

    const USER_ID = 'user_id';
    const PRODUCTRESPONSIBLEUSER_ID = 'productresponsibleuser_id';

    /**
     * Get productresponsibleuser_id
     * @return string|null
     */
    public function getProductresponsibleuserId();

    /**
     * Set productresponsibleuser_id
     * @param string $productresponsibleuserId
     * @return \Aiti\ProductResponsibleUser\ProductResponsibleUser\Api\Data\ProductResponsibleUserInterface
     */
    public function setProductresponsibleuserId($productresponsibleuserId);

    /**
     * Get user_id
     * @return string|null
     */
    public function getUserId();

    /**
     * Set user_id
     * @param string $userId
     * @return \Aiti\ProductResponsibleUser\ProductResponsibleUser\Api\Data\ProductResponsibleUserInterface
     */
    public function setUserId($userId);
}

