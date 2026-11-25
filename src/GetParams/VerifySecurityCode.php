<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class VerifySecurityCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'securityCode',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit-by' => 'limitBy',
        'security-code' => 'securityCode',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'limit-by' => 'limitBy',
    'security-code' => 'securityCode',
];
    protected const array WIRE_PROPERTY_MAP = [
    'limitBy' => 'limit-by',
    'securityCode' => 'security-code',
];

    public ?string $limitBy;
    public string $securityCode;
}
