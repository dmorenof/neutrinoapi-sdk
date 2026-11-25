<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * EmailVerifyResponse
 */
final class EmailVerifyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain',
        'domainError',
        'email',
        'isCatchAll',
        'isDeferred',
        'isDisposable',
        'isFreemail',
        'isPersonal',
        'provider',
        'smtpResponse',
        'smtpStatus',
        'syntaxError',
        'typosFixed',
        'valid',
        'verified',
    ];

    protected const array PROPERTY_MAP = [
        'domain-error' => 'domainError',
        'is-catch-all' => 'isCatchAll',
        'is-deferred' => 'isDeferred',
        'is-disposable' => 'isDisposable',
        'is-freemail' => 'isFreemail',
        'is-personal' => 'isPersonal',
        'smtp-response' => 'smtpResponse',
        'smtp-status' => 'smtpStatus',
        'syntax-error' => 'syntaxError',
        'typos-fixed' => 'typosFixed',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'domainError' => 'domain-error',
        'isCatchAll' => 'is-catch-all',
        'isDeferred' => 'is-deferred',
        'isDisposable' => 'is-disposable',
        'isFreemail' => 'is-freemail',
        'isPersonal' => 'is-personal',
        'smtpResponse' => 'smtp-response',
        'smtpStatus' => 'smtp-status',
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
     * True if this email domain has a catch-all policy (it will accept mail for any username)
     */
    public bool $isCatchAll;
    /**
     * True if the mail server responded with a temporary failure (either a 4xx response code or unresponsive server). You can retry this address later, we recommend waiting at least 15 minutes before retrying
     */
    public bool $isDeferred;
    /**
     * True if this address is a disposable, temporary or darknet related email address
     */
    public bool $isDisposable;
    /**
     * True if this address is a free-mail address
     */
    public bool $isFreemail;
    /**
     * True if this address is for a person. False if this is a role based address, e.g. admin&#64;, help&#64;, office&#64;, etc.
     */
    public bool $isPersonal;
    /**
     * The email service provider domain
     */
    public string $provider;
    /**
     * The raw SMTP response message received during verification
     */
    public string $smtpResponse;
    /**
     * The SMTP verification status for the address: <br> <ul> <li>ok - SMTP verification was successful, this is a real address that can receive mail</li> <li>invalid - this is not a valid email address (has either a domain or syntax error)</li> <li>absent - this address is not registered with the email service provider</li> <li>unresponsive - the mail server(s) for this address timed-out or refused to open an SMTP connection</li> <li>unknown - sorry, we could not reliably determine the real status of this address (this address may or may not exist)</li> </ul>
     */
    public string $smtpStatus;
    /**
     * True if this address has a syntax error
     */
    public bool $syntaxError;
    /**
     * True if typos have been fixed
     */
    public bool $typosFixed;
    /**
     * Is this a valid email address (syntax and domain is valid)
     */
    public bool $valid;
    /**
     * True if this address has passed SMTP verification. Check the smtp-status and smtp-response fields for specific verification details
     */
    public bool $verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain' => is_string($value) ? $this->domain = $value : parent::assignMember($name, $value),
            'domain-error' => is_bool($value) ? $this->domainError = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'is-catch-all' => is_bool($value) ? $this->isCatchAll = $value : parent::assignMember($name, $value),
            'is-deferred' => is_bool($value) ? $this->isDeferred = $value : parent::assignMember($name, $value),
            'is-disposable' => is_bool($value) ? $this->isDisposable = $value : parent::assignMember($name, $value),
            'is-freemail' => is_bool($value) ? $this->isFreemail = $value : parent::assignMember($name, $value),
            'is-personal' => is_bool($value) ? $this->isPersonal = $value : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            'smtp-response' => is_string($value) ? $this->smtpResponse = $value : parent::assignMember($name, $value),
            'smtp-status' => is_string($value) ? $this->smtpStatus = $value : parent::assignMember($name, $value),
            'syntax-error' => is_bool($value) ? $this->syntaxError = $value : parent::assignMember($name, $value),
            'typos-fixed' => is_bool($value) ? $this->typosFixed = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
