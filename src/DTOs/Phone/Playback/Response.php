<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\Phone\Playback;

/**
 * PhonePlaybackResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calling',
        'numberValid',
    ];

    protected const array PROPERTY_MAP = [
        'number-valid' => 'numberValid',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'numberValid' => 'number-valid',
    ];

    /**
     * True if the call is being made now
     */
    public bool $calling;
    /**
     * True if this a valid phone number
     */
    public bool $numberValid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calling' => is_bool($value) ? $this->calling = $value : parent::assignMember($name, $value),
            'number-valid' => is_bool($value) ? $this->numberValid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
