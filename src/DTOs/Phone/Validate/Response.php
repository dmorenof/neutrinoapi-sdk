<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs\Phone\Validate;

/**
 * PhoneValidateResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country',
    'countryCode',
    'countryCode3',
    'currencyCode',
    'internationalCallingCode',
    'internationalNumber',
    'isMobile',
    'localNumber',
    'location',
    'prefixNetwork',
    'type',
    'valid',
];

    protected const array PROPERTY_MAP = [
    'country-code' => 'countryCode',
    'country-code3' => 'countryCode3',
    'currency-code' => 'currencyCode',
    'international-calling-code' => 'internationalCallingCode',
    'international-number' => 'internationalNumber',
    'is-mobile' => 'isMobile',
    'local-number' => 'localNumber',
    'prefix-network' => 'prefixNetwork',
];
    protected const array WIRE_PROPERTY_MAP = [
    'countryCode' => 'country-code',
    'countryCode3' => 'country-code3',
    'currencyCode' => 'currency-code',
    'internationalCallingCode' => 'international-calling-code',
    'internationalNumber' => 'international-number',
    'isMobile' => 'is-mobile',
    'localNumber' => 'local-number',
    'prefixNetwork' => 'prefix-network',
];

    /**
     * The phone number country
     */
    public string $country;
    /**
     * The phone number country as an ISO 2-letter country code
     */
    public string $countryCode;
    /**
     * The phone number country as an ISO 3-letter country code
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country
     */
    public string $currencyCode;
    /**
     * The international calling code
     */
    public string $internationalCallingCode;
    /**
     * The number represented in full international format (E.164)
     */
    public string $internationalNumber;
    /**
     * True if this is a mobile number. If the number type is unknown this value will be false
     */
    public bool $isMobile;
    /**
     * The number represented in local dialing format
     */
    public string $localNumber;
    /**
     * The phone number location. Could be the city, region or country depending on the type of number
     */
    public string $location;
    /**
     * The network/carrier who owns the prefix (this only works for some countries, use HLR lookup for global network detection)
     */
    public string $prefixNetwork;
    /**
     * The number type based on the number prefix. <br>Possible values are: <br> <ul> <li>mobile</li> <li>fixed-line</li> <li>premium-rate</li> <li>toll-free</li> <li>voip</li> <li>unknown (use HLR lookup)</li> </ul>
     */
    public string $type;
    /**
     * Is this a valid phone number
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'international-calling-code' => is_string($value) ? $this->internationalCallingCode = $value : parent::assignMember($name, $value),
            'international-number' => is_string($value) ? $this->internationalNumber = $value : parent::assignMember($name, $value),
            'is-mobile' => is_bool($value) ? $this->isMobile = $value : parent::assignMember($name, $value),
            'local-number' => is_string($value) ? $this->localNumber = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'prefix-network' => is_string($value) ? $this->prefixNetwork = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
