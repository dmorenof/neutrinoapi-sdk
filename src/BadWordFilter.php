<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class BadWordFilter extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** POST /bad-word-filter [operationId: BadWordFilter] */
    /**
     * Bad Word Filter
     *
     * Detect bad words, swear words and profanity in a given text
     */
    public static function post(\NeutrinoAPISDK\Requests\BadWordFilter\Post $payload): \NeutrinoAPISDK\DTOs\BadWordFilterResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\BadWordFilter::class)->post($payload);
    }
}
