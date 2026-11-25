<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class EmailVerify extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /email-verify [operationId: EmailVerify] */
    /**
     * Email Verify
     *
     * SMTP based email address verification
     */
    public static function get(\NeutrinoAPISDK\GetParams\EmailVerify $params): \NeutrinoAPISDK\DTOs\EmailVerifyResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\EmailVerify::class)->get($params);
    }
}
