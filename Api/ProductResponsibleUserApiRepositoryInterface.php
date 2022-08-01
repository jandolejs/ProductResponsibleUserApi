<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api;

interface ProductResponsibleUserApiRepositoryInterface
{

    /**
     * Save ProductResponsibleUser
     * @param \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface $productResponsibleUser
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface $productResponsibleUser
    );

    /**
     * Retrieve ProductResponsibleUser
     * @param string $productresponsibleuserId
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($productresponsibleuserId);

    /**
     * Retrieve ProductResponsibleUser matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete ProductResponsibleUser
     * @param \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface $productResponsibleUser
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserApiInterface $productResponsibleUser
    );

    /**
     * Delete ProductResponsibleUser by ID
     * @param string $productresponsibleuserId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($productresponsibleuserId);
}

