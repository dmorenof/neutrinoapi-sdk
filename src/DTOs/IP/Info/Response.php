<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\IP\Info;

/**
 * IPInfoResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'city',
        'continentCode',
        'country',
        'countryCode',
        'countryCode3',
        'currencyCode',
        'hostDomain',
        'hostname',
        'ip',
        'isBogon',
        'isV4Mapped',
        'isV6',
        'latitude',
        'longitude',
        'region',
        'regionCode',
        'timezone',
        'valid',
    ];

    protected const array PROPERTY_MAP = [
        'continent-code' => 'continentCode',
        'country-code' => 'countryCode',
        'country-code3' => 'countryCode3',
        'currency-code' => 'currencyCode',
        'host-domain' => 'hostDomain',
        'is-bogon' => 'isBogon',
        'is-v4-mapped' => 'isV4Mapped',
        'is-v6' => 'isV6',
        'region-code' => 'regionCode',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'continentCode' => 'continent-code',
        'countryCode' => 'country-code',
        'countryCode3' => 'country-code3',
        'currencyCode' => 'currency-code',
        'hostDomain' => 'host-domain',
        'isBogon' => 'is-bogon',
        'isV4Mapped' => 'is-v4-mapped',
        'isV6' => 'is-v6',
        'regionCode' => 'region-code',
    ];

    /**
     * Name of the city (if detectable)
     */
    public string $city;
    /**
     * ISO 2-letter continent code
     */
    public string $continentCode;
    /**
     * Full country name
     */
    public string $country;
    /**
     * ISO 2-letter country code
     */
    public string $countryCode;
    /**
     * ISO 3-letter country code
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country
     */
    public string $currencyCode;
    /**
     * The IPs host domain (only set if reverse-lookup has been used)
     */
    public string $hostDomain;
    /**
     * The IPs full hostname (only set if reverse-lookup has been used)
     */
    public string $hostname;
    /**
     * The IP address
     */
    public string $ip;
    /**
     * True if this is a bogon IP address such as a private network, local network or reserved address
     */
    public bool $isBogon;
    /**
     * True if this is a <a href="https://en.wikipedia.org/wiki/IPv6#IPv4-mapped_IPv6_addresses">IPv4 mapped IPv6 address</a>
     */
    public bool $isV4Mapped;
    /**
     * True if this is a IPv6 address. False if IPv4
     */
    public bool $isV6;
    /**
     * Location latitude
     * Format: double
     */
    public float $latitude;
    /**
     * Location longitude
     * Format: double
     */
    public float $longitude;
    /**
     * Name of the region (if detectable)
     */
    public string $region;
    /**
     * ISO 3166-2 region code (if detectable)
     */
    public string $regionCode;
    /**
     * Map containing timezone details for the location
     */
    public \NeutrinoAPISDK\DTOs\IP\Info\Response\TimezoneMap $timezone;
    /**
     * True if this is a valid IPv4 or IPv6 address
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'continent-code' => is_string($value) ? $this->continentCode = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'host-domain' => is_string($value) ? $this->hostDomain = $value : parent::assignMember($name, $value),
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is-bogon' => is_bool($value) ? $this->isBogon = $value : parent::assignMember($name, $value),
            'is-v4-mapped' => is_bool($value) ? $this->isV4Mapped = $value : parent::assignMember($name, $value),
            'is-v6' => is_bool($value) ? $this->isV6 = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'region-code' => is_string($value) ? $this->regionCode = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
