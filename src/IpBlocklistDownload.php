<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class IpBlocklistDownload extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /ip-blocklist-download [operationId: IPBlocklistDownload] */
    /**
     * IP Blocklist Download
     *
     * This API is a direct feed to our IP blocklist data
     */
    public static function get(?\NeutrinoAPISDK\GetParams\IpBlocklistDownload $params = null): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\IpBlocklistDownload::class)->get($params);
    }

}
