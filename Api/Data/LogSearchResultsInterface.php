<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface LogSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get list of Log
     * @return \Mygento\Smtp\Api\Data\LogInterface[]
     */
    public function getItems();

    /**
     * Set list of Log
     * @param \Mygento\Smtp\Api\Data\LogInterface[] $items
     */
    public function setItems(array $items);
}
