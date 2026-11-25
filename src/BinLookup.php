<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class BinLookup extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /bin-lookup [operationId: BINLookup] */
    /**
     * BIN Lookup
     *
     * Perform a BIN (Bank Identification Number) or IIN (Issuer Identification Number) lookup
     */
    public static function get(\NeutrinoAPISDK\GetParams\BinLookup $params): \NeutrinoAPISDK\DTOs\BINLookupResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\BinLookup::class)->get($params);
    }
}
