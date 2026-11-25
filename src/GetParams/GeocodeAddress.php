<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class GeocodeAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'address' => 'address',
            'city' => 'city',
            'country-code' => 'countryCode',
            'county' => 'county',
            'fuzzy-search' => 'fuzzySearch',
            'house-number' => 'houseNumber',
            'language-code' => 'languageCode',
            'postal-code' => 'postalCode',
            'state' => 'state',
            'street' => 'street',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'country-code' => 'countryCode',
        'fuzzy-search' => 'fuzzySearch',
        'house-number' => 'houseNumber',
        'language-code' => 'languageCode',
        'postal-code' => 'postalCode',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'countryCode' => 'country-code',
        'fuzzySearch' => 'fuzzy-search',
        'houseNumber' => 'house-number',
        'languageCode' => 'language-code',
        'postalCode' => 'postal-code',
    ];

    public ?string $address;
    public ?string $city;
    public ?string $countryCode;
    public ?string $county;
    public ?bool $fuzzySearch;
    public ?string $houseNumber;
    public ?string $languageCode;
    public ?string $postalCode;
    public ?string $state;
    public ?string $street;
}
