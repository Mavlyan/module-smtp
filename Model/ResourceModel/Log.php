<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Log extends AbstractDb
{
    public const TABLE_NAME = 'mygento_smtp_log';
    public const TABLE_PRIMARY_KEY = 'id';

    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::TABLE_PRIMARY_KEY);
    }
}
