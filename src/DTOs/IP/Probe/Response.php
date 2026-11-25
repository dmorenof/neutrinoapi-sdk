<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\IP\Probe;

/**
 * IPProbeResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'asAge',
        'asCidr',
        'asCountryCode',
        'asCountryCode3',
        'asDescription',
        'asDomains',
        'asn',
        'city',
        'continentCode',
        'country',
        'countryCode',
        'countryCode3',
        'currencyCode',
        'hostDomain',
        'hostname',
        'ip',
        'isBogon',
        'isHosting',
        'isIsp',
        'isProxy',
        'isV4Mapped',
        'isV6',
        'isVpn',
        'providerDescription',
        'providerDomain',
        'providerType',
        'providerWebsite',
        'region',
        'regionCode',
        'valid',
        'vpnDomain',
    ];

    protected const array PROPERTY_MAP = [
        'as-age' => 'asAge',
        'as-cidr' => 'asCidr',
        'as-country-code' => 'asCountryCode',
        'as-country-code3' => 'asCountryCode3',
        'as-description' => 'asDescription',
        'as-domains' => 'asDomains',
        'continent-code' => 'continentCode',
        'country-code' => 'countryCode',
        'country-code3' => 'countryCode3',
        'currency-code' => 'currencyCode',
        'host-domain' => 'hostDomain',
        'is-bogon' => 'isBogon',
        'is-hosting' => 'isHosting',
        'is-isp' => 'isIsp',
        'is-proxy' => 'isProxy',
        'is-v4-mapped' => 'isV4Mapped',
        'is-v6' => 'isV6',
        'is-vpn' => 'isVpn',
        'provider-description' => 'providerDescription',
        'provider-domain' => 'providerDomain',
        'provider-type' => 'providerType',
        'provider-website' => 'providerWebsite',
        'region-code' => 'regionCode',
        'vpn-domain' => 'vpnDomain',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'asAge' => 'as-age',
        'asCidr' => 'as-cidr',
        'asCountryCode' => 'as-country-code',
        'asCountryCode3' => 'as-country-code3',
        'asDescription' => 'as-description',
        'asDomains' => 'as-domains',
        'continentCode' => 'continent-code',
        'countryCode' => 'country-code',
        'countryCode3' => 'country-code3',
        'currencyCode' => 'currency-code',
        'hostDomain' => 'host-domain',
        'isBogon' => 'is-bogon',
        'isHosting' => 'is-hosting',
        'isIsp' => 'is-isp',
        'isProxy' => 'is-proxy',
        'isV4Mapped' => 'is-v4-mapped',
        'isV6' => 'is-v6',
        'isVpn' => 'is-vpn',
        'providerDescription' => 'provider-description',
        'providerDomain' => 'provider-domain',
        'providerType' => 'provider-type',
        'providerWebsite' => 'provider-website',
        'regionCode' => 'region-code',
        'vpnDomain' => 'vpn-domain',
    ];

    protected const array VALIDATION = [
        'asAge' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The age of the autonomous system (AS) in number of years since registration
     * Format: int32
     */
    public int $asAge {
        set {
            $this->assigning('asAge', $value);
            $this->asAge = $value;
        }
    }
    /**
     * The autonomous system (AS) CIDR range
     */
    public string $asCidr;
    /**
     * The autonomous system (AS) ISO 2-letter country code
     */
    public string $asCountryCode;
    /**
     * The autonomous system (AS) ISO 3-letter country code
     */
    public string $asCountryCode3;
    /**
     * The autonomous system (AS) description / company name
     */
    public string $asDescription;
    /**
     * Array of all the domains associated with the autonomous system (AS)
     */
    public \NeutrinoAPISDK\Collections\StringCollection $asDomains;
    /**
     * The autonomous system (AS) number
     */
    public string $asn;
    /**
     * Full city name (if detectable)
     */
    public string $city;
    /**
     * ISO 2-letter continent code
     */
    public string $continentCode;
    /**
     * Full country name
     */
    public string $country;
    /**
     * ISO 2-letter country code
     */
    public string $countryCode;
    /**
     * ISO 3-letter country code
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country
     */
    public string $currencyCode;
    /**
     * The IPs host domain
     */
    public string $hostDomain;
    /**
     * The IPs full hostname (PTR)
     */
    public string $hostname;
    /**
     * The IP address
     */
    public string $ip;
    /**
     * True if this is a bogon IP address such as a private network, local network or reserved address
     */
    public bool $isBogon;
    /**
     * True if this IP belongs to a hosting company. Note that this can still be true even if the provider type is VPN/proxy, this occurs in the case that the IP is detected as both types
     */
    public bool $isHosting;
    /**
     * True if this IP belongs to an internet service provider. Note that this can still be true even if the provider type is VPN/proxy, this occurs in the case that the IP is detected as both types
     */
    public bool $isIsp;
    /**
     * True if this IP ia a proxy
     */
    public bool $isProxy;
    /**
     * True if this is a <a href="https://en.wikipedia.org/wiki/IPv6#IPv4-mapped_IPv6_addresses">IPv4 mapped IPv6 address</a>
     */
    public bool $isV4Mapped;
    /**
     * True if this is a IPv6 address. False if IPv4
     */
    public bool $isV6;
    /**
     * True if this IP ia a VPN
     */
    public bool $isVpn;
    /**
     * A description of the provider (usually extracted from the providers website)
     */
    public string $providerDescription;
    /**
     * The domain name of the provider
     */
    public string $providerDomain;
    /**
     * The detected provider type, possible values are: <br> <ul> <li>isp - IP belongs to an internet service provider. This includes both mobile, home and business internet providers</li> <li>hosting - IP belongs to a hosting company. This includes website hosting, cloud computing platforms and colocation facilities</li> <li>vpn - IP belongs to a VPN provider</li> <li>proxy - IP belongs to a proxy service. This includes HTTP/SOCKS proxies and browser based proxies</li> <li>university - IP belongs to a university/college/campus</li> <li>government - IP belongs to a government department. This includes military facilities</li> <li>commercial - IP belongs to a commercial entity such as a corporate headquarters or company office</li> <li>unknown - could not identify the provider type</li> </ul>
     */
    public string $providerType;
    /**
     * The website URL for the provider
     */
    public string $providerWebsite;
    /**
     * Full region name (if detectable)
     */
    public string $region;
    /**
     * ISO 3166-2 region code (if detectable)
     */
    public string $regionCode;
    /**
     * True if this is a valid IPv4 or IPv6 address
     */
    public bool $valid;
    /**
     * The domain of the VPN provider (may be empty if the VPN domain is not detectable)
     */
    public string $vpnDomain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'as-age' => is_int($value) ? $this->asAge = $value : parent::assignMember($name, $value),
            'as-cidr' => is_string($value) ? $this->asCidr = $value : parent::assignMember($name, $value),
            'as-country-code' => is_string($value) ? $this->asCountryCode = $value : parent::assignMember($name, $value),
            'as-country-code3' => is_string($value) ? $this->asCountryCode3 = $value : parent::assignMember($name, $value),
            'as-description' => is_string($value) ? $this->asDescription = $value : parent::assignMember($name, $value),
            'as-domains' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->asDomains = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'asn' => is_string($value) ? $this->asn = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'continent-code' => is_string($value) ? $this->continentCode = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'host-domain' => is_string($value) ? $this->hostDomain = $value : parent::assignMember($name, $value),
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'is-bogon' => is_bool($value) ? $this->isBogon = $value : parent::assignMember($name, $value),
            'is-hosting' => is_bool($value) ? $this->isHosting = $value : parent::assignMember($name, $value),
            'is-isp' => is_bool($value) ? $this->isIsp = $value : parent::assignMember($name, $value),
            'is-proxy' => is_bool($value) ? $this->isProxy = $value : parent::assignMember($name, $value),
            'is-v4-mapped' => is_bool($value) ? $this->isV4Mapped = $value : parent::assignMember($name, $value),
            'is-v6' => is_bool($value) ? $this->isV6 = $value : parent::assignMember($name, $value),
            'is-vpn' => is_bool($value) ? $this->isVpn = $value : parent::assignMember($name, $value),
            'provider-description' => is_string($value) ? $this->providerDescription = $value : parent::assignMember($name, $value),
            'provider-domain' => is_string($value) ? $this->providerDomain = $value : parent::assignMember($name, $value),
            'provider-type' => is_string($value) ? $this->providerType = $value : parent::assignMember($name, $value),
            'provider-website' => is_string($value) ? $this->providerWebsite = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'region-code' => is_string($value) ? $this->regionCode = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            'vpn-domain' => is_string($value) ? $this->vpnDomain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
