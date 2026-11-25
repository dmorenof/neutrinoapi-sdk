<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class ImageResize extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /image-resize [operationId: ImageResize] */
    /**
     * Image Resize
     *
     * Resize an image and output as either JPEG or PNG
     */
    public static function post(\NeutrinoAPISDK\Requests\ImageResize\Post $payload): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\ImageResize::class)->post($payload);
    }
}
