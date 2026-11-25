<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Collections\GeocodeAddressResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\NeutrinoAPISDK\DTOs\Location> */
final class LocationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \NeutrinoAPISDK\DTOs\Location::class;
}
