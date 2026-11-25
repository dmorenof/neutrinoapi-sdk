<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class PhoneVerify extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /phone-verify [operationId: PhoneVerify] */
    /**
     * Phone Verify
     *
     * Make an automated call to any valid phone number and playback a unique security code
     */
    public static function post(\NeutrinoAPISDK\Requests\PhoneVerify\Post $payload): \NeutrinoAPISDK\DTOs\Phone\Verify\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\PhoneVerify::class)->post($payload);
    }
}
