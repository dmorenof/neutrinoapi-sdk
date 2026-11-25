<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class Convert extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fromType',
        'fromValue',
        'toType',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'from-type' => 'fromType',
            'from-value' => 'fromValue',
            'to-type' => 'toType',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'from-type' => 'fromType',
        'from-value' => 'fromValue',
        'to-type' => 'toType',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'fromType' => 'from-type',
        'fromValue' => 'from-value',
        'toType' => 'to-type',
    ];

    public string $fromType;
    public string $fromValue;
    public string $toType;
}
