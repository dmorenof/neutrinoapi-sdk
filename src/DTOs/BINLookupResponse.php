<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * BINLookupResponse
 */
final class BINLookupResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'binNumber',
    'cardBrand',
    'cardCategory',
    'cardType',
    'country',
    'countryCode',
    'countryCode3',
    'currencyCode',
    'ipBlocklisted',
    'ipBlocklists',
    'ipCity',
    'ipCountry',
    'ipCountryCode',
    'ipCountryCode3',
    'ipMatchesBin',
    'ipRegion',
    'isCommercial',
    'isPrepaid',
    'issuer',
    'issuerPhone',
    'issuerWebsite',
    'valid',
];

    protected const array PROPERTY_MAP = [
    'bin-number' => 'binNumber',
    'card-brand' => 'cardBrand',
    'card-category' => 'cardCategory',
    'card-type' => 'cardType',
    'country-code' => 'countryCode',
    'country-code3' => 'countryCode3',
    'currency-code' => 'currencyCode',
    'ip-blocklisted' => 'ipBlocklisted',
    'ip-blocklists' => 'ipBlocklists',
    'ip-city' => 'ipCity',
    'ip-country' => 'ipCountry',
    'ip-country-code' => 'ipCountryCode',
    'ip-country-code3' => 'ipCountryCode3',
    'ip-matches-bin' => 'ipMatchesBin',
    'ip-region' => 'ipRegion',
    'is-commercial' => 'isCommercial',
    'is-prepaid' => 'isPrepaid',
    'issuer-phone' => 'issuerPhone',
    'issuer-website' => 'issuerWebsite',
];
    protected const array WIRE_PROPERTY_MAP = [
    'binNumber' => 'bin-number',
    'cardBrand' => 'card-brand',
    'cardCategory' => 'card-category',
    'cardType' => 'card-type',
    'countryCode' => 'country-code',
    'countryCode3' => 'country-code3',
    'currencyCode' => 'currency-code',
    'ipBlocklisted' => 'ip-blocklisted',
    'ipBlocklists' => 'ip-blocklists',
    'ipCity' => 'ip-city',
    'ipCountry' => 'ip-country',
    'ipCountryCode' => 'ip-country-code',
    'ipCountryCode3' => 'ip-country-code3',
    'ipMatchesBin' => 'ip-matches-bin',
    'ipRegion' => 'ip-region',
    'isCommercial' => 'is-commercial',
    'isPrepaid' => 'is-prepaid',
    'issuerPhone' => 'issuer-phone',
    'issuerWebsite' => 'issuer-website',
];

    /**
     * The BIN or IIN number
     */
    public string $binNumber;
    /**
     * The card brand (e.g. Visa or Mastercard)
     */
    public string $cardBrand;
    /**
     * The card category. There are many different card categories the most common card categories are: CLASSIC, BUSINESS, CORPORATE, PLATINUM, PREPAID
     */
    public string $cardCategory;
    /**
     * The card type, will always be one of: DEBIT, CREDIT, CHARGE CARD
     */
    public string $cardType;
    /**
     * The full country name of the issuer
     */
    public string $country;
    /**
     * The ISO 2-letter country code of the issuer
     */
    public string $countryCode;
    /**
     * The ISO 3-letter country code of the issuer
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country of the issuer
     */
    public string $currencyCode;
    /**
     * True if the customers IP is listed on one of our blocklists, see the <a href="http://www.neutrinoapi.com/api/ip-blocklist/">IP Blocklist API</a>
     */
    public bool $ipBlocklisted;
    /**
     * An array of strings indicating which blocklists this IP is listed on
     */
    public \NeutrinoAPISDK\Collections\StringCollection $ipBlocklists;
    /**
     * The city of the customers IP (if detectable)
     */
    public string $ipCity;
    /**
     * The country of the customers IP
     */
    public string $ipCountry;
    /**
     * The ISO 2-letter country code of the customers IP
     */
    public string $ipCountryCode;
    /**
     * The ISO 3-letter country code of the customers IP
     */
    public string $ipCountryCode3;
    /**
     * True if the customers IP country matches the BIN country
     */
    public bool $ipMatchesBin;
    /**
     * The region of the customers IP (if detectable)
     */
    public string $ipRegion;
    /**
     * Is this a commercial/business use card
     */
    public bool $isCommercial;
    /**
     * Is this a prepaid or prepaid reloadable card
     */
    public bool $isPrepaid;
    /**
     * The card issuer
     */
    public string $issuer;
    /**
     * The card issuers phone number
     */
    public string $issuerPhone;
    /**
     * The card issuers website
     */
    public string $issuerWebsite;
    /**
     * Is this a valid BIN or IIN number
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bin-number' => is_string($value) ? $this->binNumber = $value : parent::assignMember($name, $value),
            'card-brand' => is_string($value) ? $this->cardBrand = $value : parent::assignMember($name, $value),
            'card-category' => is_string($value) ? $this->cardCategory = $value : parent::assignMember($name, $value),
            'card-type' => is_string($value) ? $this->cardType = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'ip-blocklisted' => is_bool($value) ? $this->ipBlocklisted = $value : parent::assignMember($name, $value),
            'ip-blocklists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ipBlocklists = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ip-city' => is_string($value) ? $this->ipCity = $value : parent::assignMember($name, $value),
            'ip-country' => is_string($value) ? $this->ipCountry = $value : parent::assignMember($name, $value),
            'ip-country-code' => is_string($value) ? $this->ipCountryCode = $value : parent::assignMember($name, $value),
            'ip-country-code3' => is_string($value) ? $this->ipCountryCode3 = $value : parent::assignMember($name, $value),
            'ip-matches-bin' => is_bool($value) ? $this->ipMatchesBin = $value : parent::assignMember($name, $value),
            'ip-region' => is_string($value) ? $this->ipRegion = $value : parent::assignMember($name, $value),
            'is-commercial' => is_bool($value) ? $this->isCommercial = $value : parent::assignMember($name, $value),
            'is-prepaid' => is_bool($value) ? $this->isPrepaid = $value : parent::assignMember($name, $value),
            'issuer' => is_string($value) ? $this->issuer = $value : parent::assignMember($name, $value),
            'issuer-phone' => is_string($value) ? $this->issuerPhone = $value : parent::assignMember($name, $value),
            'issuer-website' => is_string($value) ? $this->issuerWebsite = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
