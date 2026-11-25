<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class IpInfo extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /ip-info [operationId: IPInfo] */
    /**
     * IP Info
     *
     * Get location information about an IP address and do reverse DNS (PTR) lookups
     */
    public static function get(\NeutrinoAPISDK\GetParams\IpInfo $params): \NeutrinoAPISDK\DTOs\IP\Info\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\IpInfo::class)->get($params);
    }

}
