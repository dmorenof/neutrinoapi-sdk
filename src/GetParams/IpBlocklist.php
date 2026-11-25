<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class IpBlocklist extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'ip',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'ip' => 'ip',
        'vpn-lookup' => 'vpnLookup',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'vpn-lookup' => 'vpnLookup',
];
    protected const array WIRE_PROPERTY_MAP = [
    'vpnLookup' => 'vpn-lookup',
];

    public string $ip;
    public ?bool $vpnLookup;
}
