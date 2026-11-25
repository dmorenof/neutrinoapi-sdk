<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * ConvertResponse
 */
final class ConvertResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fromType',
        'fromValue',
        'result',
        'resultFloat',
        'toType',
        'valid',
    ];

    protected const array PROPERTY_MAP = [
        'from-type' => 'fromType',
        'from-value' => 'fromValue',
        'result-float' => 'resultFloat',
        'to-type' => 'toType',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'fromType' => 'from-type',
        'fromValue' => 'from-value',
        'resultFloat' => 'result-float',
        'toType' => 'to-type',
    ];

    /**
     * The type of the value being converted from
     */
    public string $fromType;
    /**
     * The value being converted from
     */
    public string $fromValue;
    /**
     * The result of the conversion in string format
     */
    public string $result;
    /**
     * The result of the conversion as a floating-point number
     * Format: double
     */
    public float $resultFloat;
    /**
     * The type being converted to
     */
    public string $toType;
    /**
     * True if the conversion was successful and produced a valid result
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from-type' => is_string($value) ? $this->fromType = $value : parent::assignMember($name, $value),
            'from-value' => is_string($value) ? $this->fromValue = $value : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = $value : parent::assignMember($name, $value),
            'result-float' => is_float($value) ? $this->resultFloat = $value : parent::assignMember($name, $value),
            'to-type' => is_string($value) ? $this->toType = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
