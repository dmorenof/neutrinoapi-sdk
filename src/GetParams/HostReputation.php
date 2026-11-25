<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class HostReputation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'host',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'host' => 'host',
            'list-rating' => 'listRating',
            'zones' => 'zones',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'list-rating' => 'listRating',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'listRating' => 'list-rating',
    ];

    protected const array VALIDATION = [
        'listRating' => [
            'format' => 'int32',
        ],
    ];

    public string $host;
    public ?int $listRating {
        set {
            $this->assigning('listRating', $value);
            $this->listRating = $value;
        }
    }
    public ?string $zones;
}
