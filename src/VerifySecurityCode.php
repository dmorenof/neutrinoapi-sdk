<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class VerifySecurityCode extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /verify-security-code [operationId: VerifySecurityCode] */
    /**
     * Verify Security Code
     *
     * Check if a security code sent via SMS Verify or Phone Verify is valid
     */
    public static function get(\NeutrinoAPISDK\GetParams\VerifySecurityCode $params): \NeutrinoAPISDK\DTOs\VerifySecurityCodeResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\VerifySecurityCode::class)->get($params);
    }
}
