<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class ImageWatermark extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /image-watermark [operationId: ImageWatermark] */
    /**
     * Image Watermark
     *
     * Watermark one image with another image
     */
    public static function post(\NeutrinoAPISDK\Requests\ImageWatermark\Post $payload): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\ImageWatermark::class)->post($payload);
    }

}
