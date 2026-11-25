<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\GetParams;

final class UrlInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'fetch-content' => 'fetchContent',
            'ignore-certificate-errors' => 'ignoreCertificateErrors',
            'retry' => 'retry',
            'timeout' => 'timeout',
            'url' => 'url',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'fetch-content' => 'fetchContent',
        'ignore-certificate-errors' => 'ignoreCertificateErrors',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'fetchContent' => 'fetch-content',
        'ignoreCertificateErrors' => 'ignore-certificate-errors',
    ];

    protected const array VALIDATION = [
        'retry' => [
            'format' => 'int32',
        ],
        'timeout' => [
            'format' => 'int32',
        ],
    ];

    public ?bool $fetchContent;
    public ?bool $ignoreCertificateErrors;
    public ?int $retry {
        set {
            $this->assigning('retry', $value);
            $this->retry = $value;
        }
    }
    public ?int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }
    public string $url;
}
