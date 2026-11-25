<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class UrlInfo extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /url-info [operationId: URLInfo] */
    /**
     * URL Info
     *
     * Parse, analyze and retrieve content from the supplied URL
     */
    public static function get(\NeutrinoAPISDK\GetParams\UrlInfo $params): \NeutrinoAPISDK\DTOs\URLInfoResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\UrlInfo::class)->get($params);
    }
}
