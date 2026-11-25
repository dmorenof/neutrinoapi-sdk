<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class EmailValidate extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /email-validate [operationId: EmailValidate] */
    /**
     * Email Validate
     *
     * Parse, validate and clean an email address
     */
    public static function get(\NeutrinoAPISDK\GetParams\EmailValidate $params): \NeutrinoAPISDK\DTOs\EmailValidateResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\EmailValidate::class)->get($params);
    }

}
