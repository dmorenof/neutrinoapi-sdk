<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class GeocodeReverse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'latitude',
        'longitude',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'language-code' => 'languageCode',
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'zoom' => 'zoom',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'language-code' => 'languageCode',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'languageCode' => 'language-code',
    ];

    public ?string $languageCode;
    public string $latitude;
    public string $longitude;
    public ?string $zoom;
}
