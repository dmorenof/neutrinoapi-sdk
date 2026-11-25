<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * GeocodeAddressResponse
 */
final class GeocodeAddressResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'found',
    'locations',
];

    protected const array VALIDATION = [
    'found' => [
        'format' => 'int32',
    ],
];

    /**
     * The number of possible matching locations found
     * Format: int32
     */
    public int $found {
        set {
            $this->assigning('found', $value);
            $this->found = $value;
        }
    }
    /**
     * Array of matching location objects
     */
    public \NeutrinoAPISDK\Collections\GeocodeAddressResponse\LocationsCollection $locations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'found' => is_int($value) ? $this->found = $value : parent::assignMember($name, $value),
            'locations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->locations = new \NeutrinoAPISDK\Collections\GeocodeAddressResponse\LocationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \NeutrinoAPISDK\DTOs\Location::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
