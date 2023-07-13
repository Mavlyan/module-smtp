<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Cron;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Stdlib\DateTime;
use Mygento\Smtp\Mail\Transport;
use Mygento\Smtp\Model\ResourceModel;

class Clean
{
    public function __construct(
        private ResourceModel\Log $resource,
        private DateTime $dateTime,
        private DateTime\DateTime $date,
        private ScopeConfigInterface $config
    ) {
    }

    public function execute()
    {
        if (!$this->config->isSetFlag(Transport::XML_PATH_EMAIL_LOG)) {
            return;
        }

        $connection = $this->resource->getConnection();
        $condition = $connection->quoteInto(
            'created_at <= ?',
            $this->dateTime->formatDate($this->date->gmtTimestamp() - 24 * 60 * 60)
        );
        $connection->delete($this->resource->getMainTable(), $condition);
    }
}
