<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * BlocklistSensor
 */
final class BlocklistSensor extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'blocklist',
    'description',
    'id',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * The primary blocklist category this sensor belongs to
     */
    public string $blocklist;
    /**
     * Contains details about the sensor source and what type of malicious activity was detected
     */
    public string $description;
    /**
     * The sensor ID. This is a permanent and unique ID for each sensor
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocklist' => is_string($value) ? $this->blocklist = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
