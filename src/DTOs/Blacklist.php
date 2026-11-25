<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * Blacklist
 */
final class Blacklist extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'isListed',
    'listHost',
    'listName',
    'listRating',
    'responseTime',
    'returnCode',
    'txtRecord',
];

    protected const array PROPERTY_MAP = [
    'is-listed' => 'isListed',
    'list-host' => 'listHost',
    'list-name' => 'listName',
    'list-rating' => 'listRating',
    'response-time' => 'responseTime',
    'return-code' => 'returnCode',
    'txt-record' => 'txtRecord',
];
    protected const array WIRE_PROPERTY_MAP = [
    'isListed' => 'is-listed',
    'listHost' => 'list-host',
    'listName' => 'list-name',
    'listRating' => 'list-rating',
    'responseTime' => 'response-time',
    'returnCode' => 'return-code',
    'txtRecord' => 'txt-record',
];

    protected const array VALIDATION = [
    'listRating' => [
        'format' => 'int32',
    ],
    'responseTime' => [
        'format' => 'int32',
    ],
];

    /**
     * True if the host is currently black-listed
     */
    public bool $isListed;
    /**
     * The hostname of the DNSBL
     */
    public string $listHost;
    /**
     * The name of the DNSBL
     */
    public string $listName;
    /**
     * The list rating [1-3] with 1 being the best rating and 3 the lowest rating
     * Format: int32
     */
    public int $listRating {
        set {
            $this->assigning('listRating', $value);
            $this->listRating = $value;
        }
    }
    /**
     * The DNSBL server response time in milliseconds
     * Format: int32
     */
    public int $responseTime {
        set {
            $this->assigning('responseTime', $value);
            $this->responseTime = $value;
        }
    }
    /**
     * The specific return code for this listing (only set if listed)
     */
    public string $returnCode;
    /**
     * The TXT record returned for this listing (only set if listed)
     */
    public string $txtRecord;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is-listed' => is_bool($value) ? $this->isListed = $value : parent::assignMember($name, $value),
            'list-host' => is_string($value) ? $this->listHost = $value : parent::assignMember($name, $value),
            'list-name' => is_string($value) ? $this->listName = $value : parent::assignMember($name, $value),
            'list-rating' => is_int($value) ? $this->listRating = $value : parent::assignMember($name, $value),
            'response-time' => is_int($value) ? $this->responseTime = $value : parent::assignMember($name, $value),
            'return-code' => is_string($value) ? $this->returnCode = $value : parent::assignMember($name, $value),
            'txt-record' => is_string($value) ? $this->txtRecord = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
