<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class UaLookup extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /ua-lookup [operationId: UALookup] */
    /**
     * UA Lookup
     *
     * Parse, validate and get detailed user-agent information from a user agent string or from client hints
     */
    public static function get(\NeutrinoAPISDK\GetParams\UaLookup $params): \NeutrinoAPISDK\DTOs\UALookupResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\UaLookup::class)->get($params);
    }

}
