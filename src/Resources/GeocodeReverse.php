<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Resources;

final class GeocodeReverse extends \NeutrinoAPISDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/geocode-reverse',
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
                'type' => '\\NeutrinoAPISDK\\DTOs\\GeocodeReverseResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Geocode Reverse
     *
     * Convert a geographic coordinate (latitude and longitude) into a real world address
     */
    public function get(\NeutrinoAPISDK\GetParams\GeocodeReverse $params): \NeutrinoAPISDK\DTOs\GeocodeReverseResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        /** @var \NeutrinoAPISDK\DTOs\GeocodeReverseResponse|\NeutrinoAPISDK\DTOs\APIError|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
