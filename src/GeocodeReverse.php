<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class GeocodeReverse extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /geocode-reverse [operationId: GeocodeReverse] */
    /**
     * Geocode Reverse
     *
     * Convert a geographic coordinate (latitude and longitude) into a real world address
     */
    public static function get(\NeutrinoAPISDK\GetParams\GeocodeReverse $params): \NeutrinoAPISDK\DTOs\GeocodeReverseResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\GeocodeReverse::class)->get($params);
    }

}
