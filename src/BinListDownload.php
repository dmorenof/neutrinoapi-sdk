<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class BinListDownload extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /bin-list-download [operationId: BINListDownload] */
    /**
     * BIN List Download
     *
     * Download our entire BIN database for direct use on your own systems
     */
    public static function get(?\NeutrinoAPISDK\GetParams\BinListDownload $params = null): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\BinListDownload::class)->get($params);
    }
}
