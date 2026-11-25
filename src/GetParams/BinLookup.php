<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class BinLookup extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'binNumber',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bin-number' => 'binNumber',
            'customer-ip' => 'customerIp',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'bin-number' => 'binNumber',
        'customer-ip' => 'customerIp',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'binNumber' => 'bin-number',
        'customerIp' => 'customer-ip',
    ];

    public string $binNumber;
    public ?string $customerIp;
}
