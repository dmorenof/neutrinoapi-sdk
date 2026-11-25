<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class IpProbe extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ip',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'ip' => 'ip',
        ],
        'header' => [],
    ];

    public string $ip;
}
