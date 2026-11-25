<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Resources;

final class UaLookup extends \NeutrinoAPISDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ua-lookup',
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
                'type' => '\\NeutrinoAPISDK\\DTOs\\UALookupResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * UA Lookup
     *
     * Parse, validate and get detailed user-agent information from a user agent string or from client hints
     */
    public function get(\NeutrinoAPISDK\GetParams\UaLookup $params): \NeutrinoAPISDK\DTOs\UALookupResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        /** @var \NeutrinoAPISDK\DTOs\UALookupResponse|\NeutrinoAPISDK\DTOs\APIError|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
