<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class HlrLookup extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /hlr-lookup [operationId: HLRLookup] */
    /**
     * HLR Lookup
     *
     * Connect to the global mobile cellular network and retrieve the status of a mobile device
     */
    public static function get(\NeutrinoAPISDK\GetParams\HlrLookup $params): \NeutrinoAPISDK\DTOs\HLRLookupResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\HlrLookup::class)->get($params);
    }
}
