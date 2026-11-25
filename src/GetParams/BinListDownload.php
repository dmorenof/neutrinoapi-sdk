<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class BinListDownload extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'include-8digit' => 'include8digit',
        'include-iso3' => 'includeIso3',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'include-8digit' => 'include8digit',
    'include-iso3' => 'includeIso3',
];
    protected const array WIRE_PROPERTY_MAP = [
    'include8digit' => 'include-8digit',
    'includeIso3' => 'include-iso3',
];

    public ?bool $include8digit;
    public ?bool $includeIso3;
}
