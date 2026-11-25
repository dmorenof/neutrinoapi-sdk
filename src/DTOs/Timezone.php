<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * Timezone
 *
 * Map containing timezone details
 */
final class Timezone extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'abbr',
        'date',
        'id',
        'name',
        'offset',
        'time',
    ];

    /**
     * The time zone abbreviation
     * Example: "EDT"
     */
    public string $abbr;
    /**
     * The current date at the time zone (ISO 8601 format 'YYYY-MM-DD')
     * Example: "2021-01-01"
     */
    public string $date;
    /**
     * The time zone ID as per the IANA time zone database (tzdata)
     * Example: "America/New_York"
     */
    public string $id;
    /**
     * The full time zone name
     * Example: "Eastern Daylight Time"
     */
    public string $name;
    /**
     * The UTC offset for the time zone (ISO 8601 format '±hh:mm')
     */
    public string $offset;
    /**
     * The current time at the time zone (ISO 8601 format 'hh:mm:ss.sss')
     * Example: "12:30:00.00"
     */
    public string $time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abbr' => is_string($value) ? $this->abbr = $value : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'offset' => is_string($value) ? $this->offset = $value : parent::assignMember($name, $value),
            'time' => is_string($value) ? $this->time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
