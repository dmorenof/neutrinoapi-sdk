<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class HtmlClean extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /html-clean [operationId: HTMLClean] */
    /**
     * HTML Clean
     *
     * Clean and sanitize untrusted HTML
     */
    public static function post(\NeutrinoAPISDK\Requests\HtmlClean\Post $payload): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\HtmlClean::class)->post($payload);
    }
}
