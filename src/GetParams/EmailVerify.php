<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class EmailVerify extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'email' => 'email',
            'fix-typos' => 'fixTypos',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'fix-typos' => 'fixTypos',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'fixTypos' => 'fix-typos',
    ];

    public string $email;
    public ?bool $fixTypos;
}
