<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Resources;

final class SmsVerify extends \NeutrinoAPISDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/sms-verify',
        'security' => [
            [
                'api-key' => [],
                'user-id' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            400 => '\\NeutrinoAPISDK\\DTOs\\APIError',
            403 => '\\NeutrinoAPISDK\\DTOs\\APIError',
            500 => '\\NeutrinoAPISDK\\DTOs\\APIError',
            'default' => '\\NeutrinoAPISDK\\DTOs\\APIError',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\SMSVerifyResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * SMS Verify
     *
     * Send a unique security code to any mobile device via SMS
     */
    public function post(\NeutrinoAPISDK\Requests\SmsVerify\Post $payload): \NeutrinoAPISDK\DTOs\SMSVerifyResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        /** @var \NeutrinoAPISDK\DTOs\SMSVerifyResponse|\NeutrinoAPISDK\DTOs\APIError|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

}
