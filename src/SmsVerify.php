<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class SmsVerify extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /sms-verify [operationId: SMSVerify] */
    /**
     * SMS Verify
     *
     * Send a unique security code to any mobile device via SMS
     */
    public static function post(\NeutrinoAPISDK\Requests\SmsVerify\Post $payload): \NeutrinoAPISDK\DTOs\SMSVerifyResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\SmsVerify::class)->post($payload);
    }
}
