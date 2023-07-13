<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    public const STATUS_SUCCESS = 1;
    public const STATUS_ERROR = 0;

    public function toOptionArray(): array
    {
        return [
            ['value' => self::STATUS_SUCCESS, 'label' => __('Success')],
            ['value' => self::STATUS_ERROR, 'label' => __('Error')],
        ];
    }
}
