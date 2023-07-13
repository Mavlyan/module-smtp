<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Mail;

use Closure;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Mail\TransportInterface;

class Transport
{
    private const XML_PATH_EMAIL_LOG = 'system/smtp/log';

    public function __construct(private ScopeConfigInterface $config)
    {
    }

    /**
     * @param TransportInterface $subject
     * @param Closure $proceed
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundSendMessage(TransportInterface $subject, Closure $proceed): void
    {
        if (!$this->config->isSetFlag(self::XML_PATH_EMAIL_LOG)) {
            $proceed();
        }

        try {
            // $message = $subject->getMessage();
        } catch (\Exception $e) {
        }
    }
}
