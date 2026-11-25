<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class PhoneValidate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'number',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'country-code' => 'countryCode',
            'ip' => 'ip',
            'number' => 'number',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'country-code' => 'countryCode',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'countryCode' => 'country-code',
    ];

    public ?string $countryCode;
    public ?string $ip;
    public string $number;
}
