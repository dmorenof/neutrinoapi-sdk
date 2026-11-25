<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Collections\GeocodeAddressResponse;

final class LocationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \NeutrinoAPISDK\DTOs\Location::class;
}
