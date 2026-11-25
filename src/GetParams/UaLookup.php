<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class UaLookup extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ua',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'device-brand' => 'deviceBrand',
            'device-model' => 'deviceModel',
            'ua' => 'ua',
            'ua-mobile' => 'uaMobile',
            'ua-platform' => 'uaPlatform',
            'ua-platform-version' => 'uaPlatformVersion',
            'ua-version' => 'uaVersion',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'device-brand' => 'deviceBrand',
        'device-model' => 'deviceModel',
        'ua-mobile' => 'uaMobile',
        'ua-platform' => 'uaPlatform',
        'ua-platform-version' => 'uaPlatformVersion',
        'ua-version' => 'uaVersion',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'deviceBrand' => 'device-brand',
        'deviceModel' => 'device-model',
        'uaMobile' => 'ua-mobile',
        'uaPlatform' => 'ua-platform',
        'uaPlatformVersion' => 'ua-platform-version',
        'uaVersion' => 'ua-version',
    ];

    public ?string $deviceBrand;
    public ?string $deviceModel;
    public string $ua;
    public ?string $uaMobile;
    public ?string $uaPlatform;
    public ?string $uaPlatformVersion;
    public ?string $uaVersion;
}
