<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Model;

use Magento\Framework\Model\AbstractModel;
use Mygento\Smtp\Api\Data\LogInterface;

class Log extends AbstractModel implements LogInterface
{
    /** @inheritDoc */
    protected $_eventPrefix = 'mygento_smtp_log';

    /**
     * Get id
     */
    public function getId(): ?int
    {
        return $this->getData(self::ID);
    }

    /**
     * Set id
     * @param int $id
     */
    public function setId($id): self
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get subject
     */
    public function getSubject(): ?string
    {
        return $this->getData(self::SUBJECT);
    }

    /**
     * Set subject
     */
    public function setSubject(?string $subject): self
    {
        return $this->setData(self::SUBJECT, $subject);
    }

    /**
     * Get content
     */
    public function getContent(): ?string
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set content
     */
    public function setContent(?string $content): self
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Get status
     */
    public function getStatus(): int
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set status
     */
    public function setStatus(int $status): self
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get error
     */
    public function getError(): ?string
    {
        return $this->getData(self::ERROR);
    }

    /**
     * Set error
     */
    public function setError(?string $error): self
    {
        return $this->setData(self::ERROR, $error);
    }

    /**
     * Get sender
     */
    public function getSender(): ?string
    {
        return $this->getData(self::SENDER);
    }

    /**
     * Set sender
     */
    public function setSender(?string $sender): self
    {
        return $this->setData(self::SENDER, $sender);
    }

    /**
     * Get recipient
     */
    public function getRecipient(): ?string
    {
        return $this->getData(self::RECIPIENT);
    }

    /**
     * Set recipient
     */
    public function setRecipient(?string $recipient): self
    {
        return $this->setData(self::RECIPIENT, $recipient);
    }

    /**
     * Get cc
     */
    public function getCc(): ?string
    {
        return $this->getData(self::CC);
    }

    /**
     * Set cc
     */
    public function setCc(?string $cc): self
    {
        return $this->setData(self::CC, $cc);
    }

    /**
     * Get bcc
     */
    public function getBcc(): ?string
    {
        return $this->getData(self::BCC);
    }

    /**
     * Set bcc
     */
    public function setBcc(?string $bcc): self
    {
        return $this->setData(self::BCC, $bcc);
    }

    /**
     * Get created at
     */
    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created at
     */
    public function setCreatedAt(string $createdAt): self
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Log::class);
    }
}
