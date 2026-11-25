<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Collections\IP\Blocklist\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\NeutrinoAPISDK\DTOs\BlocklistSensor> */
final class SensorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \NeutrinoAPISDK\DTOs\BlocklistSensor::class;
}
