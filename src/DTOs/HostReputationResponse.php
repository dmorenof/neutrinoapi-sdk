<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * HostReputationResponse
 */
final class HostReputationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'host',
    'isListed',
    'listCount',
    'lists',
];

    protected const array PROPERTY_MAP = [
    'is-listed' => 'isListed',
    'list-count' => 'listCount',
];
    protected const array WIRE_PROPERTY_MAP = [
    'isListed' => 'is-listed',
    'listCount' => 'list-count',
];

    protected const array VALIDATION = [
    'listCount' => [
        'format' => 'int32',
    ],
];

    /**
     * The IP address or host name
     */
    public string $host;
    /**
     * Is this host blacklisted
     */
    public bool $isListed;
    /**
     * The number of DNSBLs the host is listed on
     * Format: int32
     */
    public int $listCount {
        set {
            $this->assigning('listCount', $value);
            $this->listCount = $value;
        }
    }
    /**
     * Array of objects for each DNSBL checked
     */
    public \NeutrinoAPISDK\Collections\HostReputationResponse\ListsCollection $lists;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'host' => is_string($value) ? $this->host = $value : parent::assignMember($name, $value),
            'is-listed' => is_bool($value) ? $this->isListed = $value : parent::assignMember($name, $value),
            'list-count' => is_int($value) ? $this->listCount = $value : parent::assignMember($name, $value),
            'lists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->lists = new \NeutrinoAPISDK\Collections\HostReputationResponse\ListsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \NeutrinoAPISDK\DTOs\Blacklist::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
