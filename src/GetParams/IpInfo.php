<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class IpInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ip' => 'ip',
            'reverse-lookup' => 'reverseLookup',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'reverse-lookup' => 'reverseLookup',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'reverseLookup' => 'reverse-lookup',
    ];

    public string $ip;
    public ?bool $reverseLookup;
}
