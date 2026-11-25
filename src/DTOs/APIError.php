<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * APIError
 */
final class APIError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiError',
        'apiErrorMsg',
    ];

    protected const array VALIDATION = [
        'apiError' => [
            'format' => 'int32',
        ],
    ];

    /**
     * API error code. If set and > 0 then an API error has occurred your request could not be completed
     * Format: int32
     */
    public int $apiError {
        set {
            $this->assigning('apiError', $value);
            $this->apiError = $value;
        }
    }
    /**
     * API error message
     */
    public string $apiErrorMsg;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiError' => is_int($value) ? $this->apiError = $value : parent::assignMember($name, $value),
            'apiErrorMsg' => is_string($value) ? $this->apiErrorMsg = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
