<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class BrowserBot extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /browser-bot [operationId: BrowserBot] */
    /**
     * Browser Bot
     *
     * Browser bot can extract content, interact with keyboard and mouse events, and execute JavaScript on a website
     */
    public static function post(\NeutrinoAPISDK\Requests\BrowserBot\Post $payload): \NeutrinoAPISDK\DTOs\BrowserBotResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\BrowserBot::class)->post($payload);
    }

}
