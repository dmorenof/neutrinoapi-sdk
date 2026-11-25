<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class PhonePlayback extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /phone-playback [operationId: PhonePlayback] */
    /**
     * Phone Playback
     *
     * Make an automated call to any valid phone number and playback an audio message
     */
    public static function post(\NeutrinoAPISDK\Requests\PhonePlayback\Post $payload): \NeutrinoAPISDK\DTOs\Phone\Playback\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\PhonePlayback::class)->post($payload);
    }

}
