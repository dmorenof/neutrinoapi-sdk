<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\Location;

/** @extends \Dmorenof\SdkRuntime\Map<string> */
final class AddressComponentsMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'string';
    protected const bool VALUE_NULLABLE = false;
}
