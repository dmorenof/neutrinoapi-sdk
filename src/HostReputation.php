<?php

declare(strict_types=1);

namespace NeutrinoAPISDK;

final class HostReputation extends \NeutrinoAPISDK\NeutrinoAPISDK
{
    /** GET /host-reputation [operationId: HostReputation] */
    /**
     * Host Reputation
     *
     * Check the reputation of an IP address, domain name or URL against a comprehensive list of blacklists and blocklists
     */
    public static function get(\NeutrinoAPISDK\GetParams\HostReputation $params): \NeutrinoAPISDK\DTOs\HostReputationResponse|\NeutrinoAPISDK\DTOs\APIError|null
    {
        return self::client()->resource(\NeutrinoAPISDK\Resources\HostReputation::class)->get($params);
    }

}
