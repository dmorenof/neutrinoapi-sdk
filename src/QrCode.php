<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class QrCode extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /qr-code [operationId: QRCode] */
    /**
     * QR Code
     *
     * Generate a QR code as a PNG image
     */
    public static function post(\NeutrinoAPISDK\Requests\QrCode\Post $payload): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\QrCode::class)->post($payload);
    }

}
