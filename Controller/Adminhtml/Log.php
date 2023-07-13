<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Framework\Registry;
use Mygento\Smtp\Api\LogRepositoryInterface;

abstract class Log extends Action
{
    /**
     * Authorization level
     *
     * @see _isAllowed()
     */
    public const ADMIN_RESOURCE = 'Mygento_Smtp::log';

    public function __construct(
        protected readonly LogRepositoryInterface $repository,
        protected readonly Registry $coreRegistry,
        Action\Context $context,
    ) {
        parent::__construct($context);
    }
}
