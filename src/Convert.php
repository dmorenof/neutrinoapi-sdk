<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class Convert extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /convert [operationId: Convert] */
    /**
     * Convert
     *
     * A currency and unit conversion tool
     */
    public static function get(\NeutrinoAPISDK\GetParams\Convert $params): \NeutrinoAPISDK\DTOs\ConvertResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\Convert::class)->get($params);
    }
}
