<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Api\Data;

interface LogInterface
{
    public const ID = 'id';
    public const SUBJECT = 'subject';
    public const CONTENT = 'content';
    public const STATUS = 'status';
    public const ERROR = 'error';
    public const SENDER = 'sender';
    public const RECIPIENT = 'recipient';
    public const CC = 'cc';
    public const BCC = 'bcc';
    public const CREATED_AT = 'created_at';

    /**
     * Get id
     */
    public function getId(): ?int;

    /**
     * Set id
     * @param int $id
     */
    public function setId($id): self;

    /**
     * Get subject
     */
    public function getSubject(): ?string;

    /**
     * Set subject
     */
    public function setSubject(?string $subject): self;

    /**
     * Get content
     */
    public function getContent(): ?string;

    /**
     * Set content
     */
    public function setContent(?string $content): self;

    /**
     * Get status
     */
    public function getStatus(): int;

    /**
     * Set status
     */
    public function setStatus(int $status): self;

    /**
     * Get error
     */
    public function getError(): ?string;

    /**
     * Set error
     */
    public function setError(?string $error): self;

    /**
     * Get sender
     */
    public function getSender(): ?string;

    /**
     * Set sender
     */
    public function setSender(?string $sender): self;

    /**
     * Get recipient
     */
    public function getRecipient(): ?string;

    /**
     * Set recipient
     */
    public function setRecipient(?string $recipient): self;

    /**
     * Get cc
     */
    public function getCc(): ?string;

    /**
     * Set cc
     */
    public function setCc(?string $cc): self;

    /**
     * Get bcc
     */
    public function getBcc(): ?string;

    /**
     * Set bcc
     */
    public function setBcc(?string $bcc): self;

    /**
     * Get created at
     */
    public function getCreatedAt(): string;

    /**
     * Set created at
     */
    public function setCreatedAt(string $createdAt): self;
}
