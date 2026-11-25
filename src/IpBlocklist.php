<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class IpBlocklist extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /ip-blocklist [operationId: IPBlocklist] */
    /**
     * IP Blocklist
     *
     * The IP Blocklist API will detect potentially malicious or dangerous IP addresses
     */
    public static function get(\NeutrinoAPISDK\GetParams\IpBlocklist $params): \NeutrinoAPISDK\DTOs\IP\Blocklist\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\IpBlocklist::class)->get($params);
    }

}
