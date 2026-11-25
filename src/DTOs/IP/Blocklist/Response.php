<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\IP\Blocklist;

/**
 * IPBlocklistResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'blocklists',
    'cidr',
    'ip',
    'isBot',
    'isDshield',
    'isExploitBot',
    'isHijacked',
    'isListed',
    'isMalware',
    'isProxy',
    'isSpamBot',
    'isSpider',
    'isSpyware',
    'isTor',
    'isVpn',
    'lastSeen',
    'listCount',
    'sensors',
];

    protected const array PROPERTY_MAP = [
    'is-bot' => 'isBot',
    'is-dshield' => 'isDshield',
    'is-exploit-bot' => 'isExploitBot',
    'is-hijacked' => 'isHijacked',
    'is-listed' => 'isListed',
    'is-malware' => 'isMalware',
    'is-proxy' => 'isProxy',
    'is-spam-bot' => 'isSpamBot',
    'is-spider' => 'isSpider',
    'is-spyware' => 'isSpyware',
    'is-tor' => 'isTor',
    'is-vpn' => 'isVpn',
    'last-seen' => 'lastSeen',
    'list-count' => 'listCount',
];
    protected const array WIRE_PROPERTY_MAP = [
    'isBot' => 'is-bot',
    'isDshield' => 'is-dshield',
    'isExploitBot' => 'is-exploit-bot',
    'isHijacked' => 'is-hijacked',
    'isListed' => 'is-listed',
    'isMalware' => 'is-malware',
    'isProxy' => 'is-proxy',
    'isSpamBot' => 'is-spam-bot',
    'isSpider' => 'is-spider',
    'isSpyware' => 'is-spyware',
    'isTor' => 'is-tor',
    'isVpn' => 'is-vpn',
    'lastSeen' => 'last-seen',
    'listCount' => 'list-count',
];

    protected const array VALIDATION = [
    'lastSeen' => [
        'format' => 'int32',
    ],
    'listCount' => [
        'format' => 'int32',
    ],
];

    /**
     * An array of strings indicating which blocklist categories this IP is listed on
     */
    public \NeutrinoAPISDK\Collections\StringCollection $blocklists;
    /**
     * The CIDR address for this listing (only set if the IP is listed)
     */
    public string $cidr;
    /**
     * The IP address
     */
    public string $ip;
    /**
     * IP is hosting a malicious bot or is part of a botnet. This is a broad category which includes brute-force crackers
     */
    public bool $isBot;
    /**
     * IP has been flagged as a significant attack source by DShield (dshield.org)
     */
    public bool $isDshield;
    /**
     * IP is hosting an exploit finding bot or is running exploit scanning software
     */
    public bool $isExploitBot;
    /**
     * IP is part of a hijacked netblock or a netblock controlled by a criminal organization
     */
    public bool $isHijacked;
    /**
     * Is this IP on a blocklist
     */
    public bool $isListed;
    /**
     * IP is involved in distributing or is running malware
     */
    public bool $isMalware;
    /**
     * IP has been detected as an anonymous web proxy or anonymous HTTP proxy
     */
    public bool $isProxy;
    /**
     * IP address is hosting a spam bot, comment spamming or any other spamming type software
     */
    public bool $isSpamBot;
    /**
     * IP is running a hostile web spider / web crawler
     */
    public bool $isSpider;
    /**
     * IP is involved in distributing or is running spyware
     */
    public bool $isSpyware;
    /**
     * IP is a Tor node or running a Tor related service
     */
    public bool $isTor;
    /**
     * IP belongs to a public VPN provider (only set if the 'vpn-lookup' option is enabled)
     */
    public bool $isVpn;
    /**
     * The unix time when this IP was last seen on any blocklist. IPs are automatically removed after 7 days therefor this value will never be older than 7 days
     * Format: int32
     */
    public int $lastSeen {
        set {
            $this->assigning('lastSeen', $value);
            $this->lastSeen = $value;
        }
    }
    /**
     * The number of blocklists the IP is listed on
     * Format: int32
     */
    public int $listCount {
        set {
            $this->assigning('listCount', $value);
            $this->listCount = $value;
        }
    }
    /**
     * An array of objects containing details on which specific sensors detected the IP
     */
    public \NeutrinoAPISDK\Collections\IP\Blocklist\Response\SensorsCollection $sensors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocklists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->blocklists = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'cidr' => is_string($value) ? $this->cidr = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is-bot' => is_bool($value) ? $this->isBot = $value : parent::assignMember($name, $value),
            'is-dshield' => is_bool($value) ? $this->isDshield = $value : parent::assignMember($name, $value),
            'is-exploit-bot' => is_bool($value) ? $this->isExploitBot = $value : parent::assignMember($name, $value),
            'is-hijacked' => is_bool($value) ? $this->isHijacked = $value : parent::assignMember($name, $value),
            'is-listed' => is_bool($value) ? $this->isListed = $value : parent::assignMember($name, $value),
            'is-malware' => is_bool($value) ? $this->isMalware = $value : parent::assignMember($name, $value),
            'is-proxy' => is_bool($value) ? $this->isProxy = $value : parent::assignMember($name, $value),
            'is-spam-bot' => is_bool($value) ? $this->isSpamBot = $value : parent::assignMember($name, $value),
            'is-spider' => is_bool($value) ? $this->isSpider = $value : parent::assignMember($name, $value),
            'is-spyware' => is_bool($value) ? $this->isSpyware = $value : parent::assignMember($name, $value),
            'is-tor' => is_bool($value) ? $this->isTor = $value : parent::assignMember($name, $value),
            'is-vpn' => is_bool($value) ? $this->isVpn = $value : parent::assignMember($name, $value),
            'last-seen' => is_int($value) ? $this->lastSeen = $value : parent::assignMember($name, $value),
            'list-count' => is_int($value) ? $this->listCount = $value : parent::assignMember($name, $value),
            'sensors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sensors = new \NeutrinoAPISDK\Collections\IP\Blocklist\Response\SensorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \NeutrinoAPISDK\DTOs\BlocklistSensor::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
