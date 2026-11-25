<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * SMSVerifyResponse
 */
final class SMSVerifyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'numberValid',
    'securityCode',
    'sent',
];

    protected const array PROPERTY_MAP = [
    'number-valid' => 'numberValid',
    'security-code' => 'securityCode',
];
    protected const array WIRE_PROPERTY_MAP = [
    'numberValid' => 'number-valid',
    'securityCode' => 'security-code',
];

    /**
     * True if this a valid phone number
     */
    public bool $numberValid;
    /**
     * The security code generated, you can save this code to perform your own verification or you can use the <a href="https://www.neutrinoapi.com/api/verify-security-code/">Verify Security Code API</a>
     */
    public string $securityCode;
    /**
     * True if the SMS has been sent
     */
    public bool $sent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number-valid' => is_bool($value) ? $this->numberValid = $value : parent::assignMember($name, $value),
            'security-code' => is_string($value) ? $this->securityCode = $value : parent::assignMember($name, $value),
            'sent' => is_bool($value) ? $this->sent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
