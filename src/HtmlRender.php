<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class HtmlRender extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /html-render [operationId: HTMLRender] */
    /**
     * HTML Render
     *
     * Render HTML content to PDF, JPG or PNG
     */
    public static function post(\NeutrinoAPISDK\Requests\HtmlRender\Post $payload): string|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\HtmlRender::class)->post($payload);
    }
}
