<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class IpBlocklistDownload extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'cidr' => 'cidr',
            'format' => 'format',
            'include-vpn' => 'includeVpn',
            'ip6' => 'ip6',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'include-vpn' => 'includeVpn',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'includeVpn' => 'include-vpn',
    ];

    public ?bool $cidr;
    public ?string $format;
    public ?bool $includeVpn;
    public ?bool $ip6;
}
