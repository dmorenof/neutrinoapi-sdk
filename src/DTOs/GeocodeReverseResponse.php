<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * GeocodeReverseResponse
 */
final class GeocodeReverseResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'addressComponents',
        'city',
        'country',
        'countryCode',
        'countryCode3',
        'currencyCode',
        'found',
        'latitude',
        'locationTags',
        'locationType',
        'longitude',
        'postalAddress',
        'postalCode',
        'regionCode',
        'state',
        'timezone',
    ];

    protected const array PROPERTY_MAP = [
        'address-components' => 'addressComponents',
        'country-code' => 'countryCode',
        'country-code3' => 'countryCode3',
        'currency-code' => 'currencyCode',
        'location-tags' => 'locationTags',
        'location-type' => 'locationType',
        'postal-address' => 'postalAddress',
        'postal-code' => 'postalCode',
        'region-code' => 'regionCode',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'addressComponents' => 'address-components',
        'countryCode' => 'country-code',
        'countryCode3' => 'country-code3',
        'currencyCode' => 'currency-code',
        'locationTags' => 'location-tags',
        'locationType' => 'location-type',
        'postalAddress' => 'postal-address',
        'postalCode' => 'postal-code',
        'regionCode' => 'region-code',
    ];

    /**
     * The complete address using comma-separated values
     */
    public string $address;
    /**
     * The components which make up the address such as road, city, state, etc
     */
    public \NeutrinoAPISDK\DTOs\GeocodeReverseResponse\AddressComponentsMap $addressComponents;
    /**
     * The city of the location
     */
    public string $city;
    /**
     * The country of the location
     */
    public string $country;
    /**
     * The ISO 2-letter country code of the location
     */
    public string $countryCode;
    /**
     * The ISO 3-letter country code of the location
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country
     */
    public string $currencyCode;
    /**
     * True if these coordinates map to a real location
     */
    public bool $found;
    /**
     * The location latitude
     * Format: double
     */
    public float $latitude;
    /**
     * Array of strings containing any location tags associated with the address. Tags are additional pieces of metadata about a specific location, there are thousands of different tags. Some examples of tags: shop, office, cafe, bank, pub
     */
    public \NeutrinoAPISDK\Collections\StringCollection $locationTags;
    /**
     * The detected location type ordered roughly from most to least precise, possible values are: <br> <ul> <li>address - indicates a precise street address</li> <li>street - accurate to the street level but may not point to the exact location of the house/building number</li> <li>city - accurate to the city level, this includes villages, towns, suburbs, etc</li> <li>postal-code - indicates a postal code area (no house or street information present)</li> <li>railway - location is part of a rail network such as a station or railway track</li> <li>natural - indicates a natural feature, for example a mountain peak or a waterway</li> <li>island - location is an island or archipelago</li> <li>administrative - indicates an administrative boundary such as a country, state or province</li> </ul>
     */
    public string $locationType;
    /**
     * The location longitude
     * Format: double
     */
    public float $longitude;
    /**
     * The formatted address using local standards suitable for printing on an envelope
     */
    public string $postalAddress;
    /**
     * The postal code for the location
     */
    public string $postalCode;
    /**
     * The ISO 3166-2 region code for the location
     */
    public string $regionCode;
    /**
     * The state of the location
     */
    public string $state;
    /**
     * Map containing timezone details for the location
     */
    public \NeutrinoAPISDK\DTOs\GeocodeReverseResponse\TimezoneMap $timezone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'found' => is_bool($value) ? $this->found = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'location-tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->locationTags = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'location-type' => is_string($value) ? $this->locationType = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'postal-address' => is_string($value) ? $this->postalAddress = $value : parent::assignMember($name, $value),
            'postal-code' => is_string($value) ? $this->postalCode = $value : parent::assignMember($name, $value),
            'region-code' => is_string($value) ? $this->regionCode = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
