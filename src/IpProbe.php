<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class IpProbe extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /ip-probe [operationId: IPProbe] */
    /**
     * IP Probe
     *
     * Execute a realtime network probe against an IPv4 or IPv6 address
     */
    public static function get(\NeutrinoAPISDK\GetParams\IpProbe $params): \NeutrinoAPISDK\DTOs\IP\Probe\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\IpProbe::class)->get($params);
    }
}
