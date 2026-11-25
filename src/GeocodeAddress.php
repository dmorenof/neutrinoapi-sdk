<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class GeocodeAddress extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /geocode-address [operationId: GeocodeAddress] */
    /**
     * Geocode Address
     *
     * Geocode an address, partial address or just the name of a place
     */
    public static function get(?\NeutrinoAPISDK\GetParams\GeocodeAddress $params = null): \NeutrinoAPISDK\DTOs\GeocodeAddressResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\GeocodeAddress::class)->get($params);
    }

}
