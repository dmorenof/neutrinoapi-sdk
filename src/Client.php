<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
        'api-key' => [
            'type' => 'apiKey',
            'scheme' => null,
            'location' => 'header',
            'parameterName' => 'api-key',
        ],
        'user-id' => [
            'type' => 'apiKey',
            'scheme' => null,
            'location' => 'header',
            'parameterName' => 'user-id',
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
