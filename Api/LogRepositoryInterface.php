<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface LogRepositoryInterface
{
    /**
     * Save Log
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\LogInterface $entity): Data\LogInterface;

    /**
     * Retrieve Log
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById(int $entityId): Data\LogInterface;

    /**
     * Retrieve Log entities matching the specified criteria
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria): Data\LogSearchResultsInterface;

    /**
     * Delete Log
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\LogInterface $entity): bool;

    /**
     * Delete Log
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $entityId): bool;
}
