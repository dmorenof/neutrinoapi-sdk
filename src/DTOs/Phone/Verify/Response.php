<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\Phone\Verify;

/**
 * PhoneVerifyResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calling',
        'numberValid',
        'securityCode',
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
     * True if the call is being made now
     */
    public bool $calling;
    /**
     * True if this a valid phone number
     */
    public bool $numberValid;
    /**
     * The security code generated, you can save this code to perform your own verification or you can use the <a href="https://www.neutrinoapi.com/api/verify-security-code/">Verify Security Code API</a>
     */
    public string $securityCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calling' => is_bool($value) ? $this->calling = $value : parent::assignMember($name, $value),
            'number-valid' => is_bool($value) ? $this->numberValid = $value : parent::assignMember($name, $value),
            'security-code' => is_string($value) ? $this->securityCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
