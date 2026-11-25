<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * EmailValidateResponse
 */
final class EmailValidateResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain',
        'domainError',
        'email',
        'isDisposable',
        'isFreemail',
        'isPersonal',
        'provider',
        'syntaxError',
        'typosFixed',
        'valid',
    ];

    protected const array PROPERTY_MAP = [
        'domain-error' => 'domainError',
        'is-disposable' => 'isDisposable',
        'is-freemail' => 'isFreemail',
        'is-personal' => 'isPersonal',
        'syntax-error' => 'syntaxError',
        'typos-fixed' => 'typosFixed',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'domainError' => 'domain-error',
        'isDisposable' => 'is-disposable',
        'isFreemail' => 'is-freemail',
        'isPersonal' => 'is-personal',
        'syntaxError' => 'syntax-error',
        'typosFixed' => 'typos-fixed',
    ];

    /**
     * The email domain
     */
    public string $domain;
    /**
     * True if this address has a domain error (e.g. no valid mail server records)
     */
    public bool $domainError;
    /**
     * The email address. If you have used the fix-typos option then this will be the fixed address
     */
    public string $email;
    /**
     * True if this address is a disposable, temporary or darknet related email address
     */
    public bool $isDisposable;
    /**
     * True if this address is a free-mail address
     */
    public bool $isFreemail;
    /**
     * True if this address belongs to a person. False if this is a role based address, e.g. admin&#64;, help&#64;, office&#64;, etc.
     */
    public bool $isPersonal;
    /**
     * The email service provider domain
     */
    public string $provider;
    /**
     * True if this address has a syntax error
     */
    public bool $syntaxError;
    /**
     * True if typos have been fixed
     */
    public bool $typosFixed;
    /**
     * Is this a valid email
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'domain-error' => is_bool($value) ? $this->domainError = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'is-disposable' => is_bool($value) ? $this->isDisposable = $value : parent::assignMember($name, $value),
            'is-freemail' => is_bool($value) ? $this->isFreemail = $value : parent::assignMember($name, $value),
            'is-personal' => is_bool($value) ? $this->isPersonal = $value : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            'syntax-error' => is_bool($value) ? $this->syntaxError = $value : parent::assignMember($name, $value),
            'typos-fixed' => is_bool($value) ? $this->typosFixed = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
