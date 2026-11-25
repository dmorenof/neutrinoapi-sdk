<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * VerifySecurityCodeResponse
 */
final class VerifySecurityCodeResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'verified',
];

    /**
     * True if the code is valid
     */
    public bool $verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
