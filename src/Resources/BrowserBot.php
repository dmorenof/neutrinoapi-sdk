<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Resources;

final class BrowserBot extends \NeutrinoAPISDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/browser-bot',
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
                'type' => '\\NeutrinoAPISDK\\DTOs\\BrowserBotResponse',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\NeutrinoAPISDK\\DTOs\\APIError',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'exec' => 'multi',
        ],
    ];

    /**
     * Browser Bot
     *
     * Browser bot can extract content, interact with keyboard and mouse events, and execute JavaScript on a website
     */
    public function post(\NeutrinoAPISDK\Requests\BrowserBot\Post $payload): \NeutrinoAPISDK\DTOs\BrowserBotResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        /** @var \NeutrinoAPISDK\DTOs\BrowserBotResponse|\NeutrinoAPISDK\DTOs\APIError|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
