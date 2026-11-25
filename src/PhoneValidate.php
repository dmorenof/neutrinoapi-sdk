<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class PhoneValidate extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /phone-validate [operationId: PhoneValidate] */
    /**
     * Phone Validate
     *
     * Parse, validate and get location information about a phone number
     */
    public static function get(\NeutrinoAPISDK\GetParams\PhoneValidate $params): \NeutrinoAPISDK\DTOs\Phone\Validate\Response|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\PhoneValidate::class)->get($params);
    }

}
