<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * HLRLookupResponse
 */
final class HLRLookupResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country',
    'countryCode',
    'countryCode3',
    'currencyCode',
    'currentNetwork',
    'hlrStatus',
    'hlrValid',
    'imsi',
    'internationalCallingCode',
    'internationalNumber',
    'isMobile',
    'isPorted',
    'isRoaming',
    'localNumber',
    'location',
    'mcc',
    'mnc',
    'msc',
    'msin',
    'numberType',
    'numberValid',
    'originNetwork',
    'portedNetwork',
    'roamingCountryCode',
];

    protected const array PROPERTY_MAP = [
    'country-code' => 'countryCode',
    'country-code3' => 'countryCode3',
    'currency-code' => 'currencyCode',
    'current-network' => 'currentNetwork',
    'hlr-status' => 'hlrStatus',
    'hlr-valid' => 'hlrValid',
    'international-calling-code' => 'internationalCallingCode',
    'international-number' => 'internationalNumber',
    'is-mobile' => 'isMobile',
    'is-ported' => 'isPorted',
    'is-roaming' => 'isRoaming',
    'local-number' => 'localNumber',
    'number-type' => 'numberType',
    'number-valid' => 'numberValid',
    'origin-network' => 'originNetwork',
    'ported-network' => 'portedNetwork',
    'roaming-country-code' => 'roamingCountryCode',
];
    protected const array WIRE_PROPERTY_MAP = [
    'countryCode' => 'country-code',
    'countryCode3' => 'country-code3',
    'currencyCode' => 'currency-code',
    'currentNetwork' => 'current-network',
    'hlrStatus' => 'hlr-status',
    'hlrValid' => 'hlr-valid',
    'internationalCallingCode' => 'international-calling-code',
    'internationalNumber' => 'international-number',
    'isMobile' => 'is-mobile',
    'isPorted' => 'is-ported',
    'isRoaming' => 'is-roaming',
    'localNumber' => 'local-number',
    'numberType' => 'number-type',
    'numberValid' => 'number-valid',
    'originNetwork' => 'origin-network',
    'portedNetwork' => 'ported-network',
    'roamingCountryCode' => 'roaming-country-code',
];

    /**
     * The phone number country
     */
    public string $country;
    /**
     * The number location as an ISO 2-letter country code
     */
    public string $countryCode;
    /**
     * The number location as an ISO 3-letter country code
     */
    public string $countryCode3;
    /**
     * ISO 4217 currency code associated with the country
     */
    public string $currencyCode;
    /**
     * The currently used network/carrier name
     */
    public string $currentNetwork;
    /**
     * The HLR lookup status, possible values are: <br> <ul> <li>ok - the HLR lookup was successful and the device is connected</li> <li>absent - the number was once registered but the device has been switched off or out of network range for some time</li> <li>unknown - the number is not known by the mobile network</li> <li>invalid - the number is not a valid mobile MSISDN number</li> <li>fixed-line - the number is a registered fixed-line not mobile</li> <li>voip - the number has been detected as a VOIP line</li> <li>failed - the HLR lookup has failed, we could not determine the real status of this number</li> </ul>
     */
    public string $hlrStatus;
    /**
     * Was the HLR lookup successful. If true then this is a working and registered cell-phone or mobile device (SMS and phone calls will be delivered)
     */
    public bool $hlrValid;
    /**
     * The mobile IMSI number (International Mobile Subscriber Identity)
     */
    public string $imsi;
    /**
     * The international calling code
     */
    public string $internationalCallingCode;
    /**
     * The number represented in full international format
     */
    public string $internationalNumber;
    /**
     * True if this is a mobile number (only true with 100% certainty, if the number type is unknown this value will be false)
     */
    public bool $isMobile;
    /**
     * Has this number been ported to another network
     */
    public bool $isPorted;
    /**
     * Is this number currently roaming from its origin country
     */
    public bool $isRoaming;
    /**
     * The number represented in local dialing format
     */
    public string $localNumber;
    /**
     * The number location. Could be a city, region or country depending on the type of number
     */
    public string $location;
    /**
     * The mobile MCC number (Mobile Country Code)
     */
    public string $mcc;
    /**
     * The mobile MNC number (Mobile Network Code)
     */
    public string $mnc;
    /**
     * The mobile MSC number (Mobile Switching Center)
     */
    public string $msc;
    /**
     * The mobile MSIN number (Mobile Subscription Identification Number)
     */
    public string $msin;
    /**
     * The number type, possible values are: <br> <ul> <li>mobile</li> <li>fixed-line</li> <li>premium-rate</li> <li>toll-free</li> <li>voip</li> <li>unknown</li> </ul>
     */
    public string $numberType;
    /**
     * True if this a valid phone number
     */
    public bool $numberValid;
    /**
     * The origin network/carrier name
     */
    public string $originNetwork;
    /**
     * The ported to network/carrier name (only set if the number has been ported)
     */
    public string $portedNetwork;
    /**
     * If the number is currently roaming, the ISO 2-letter country code of the roaming in country
     */
    public string $roamingCountryCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'country-code3' => is_string($value) ? $this->countryCode3 = $value : parent::assignMember($name, $value),
            'currency-code' => is_string($value) ? $this->currencyCode = $value : parent::assignMember($name, $value),
            'current-network' => is_string($value) ? $this->currentNetwork = $value : parent::assignMember($name, $value),
            'hlr-status' => is_string($value) ? $this->hlrStatus = $value : parent::assignMember($name, $value),
            'hlr-valid' => is_bool($value) ? $this->hlrValid = $value : parent::assignMember($name, $value),
            'imsi' => is_string($value) ? $this->imsi = $value : parent::assignMember($name, $value),
            'international-calling-code' => is_string($value) ? $this->internationalCallingCode = $value : parent::assignMember($name, $value),
            'international-number' => is_string($value) ? $this->internationalNumber = $value : parent::assignMember($name, $value),
            'is-mobile' => is_bool($value) ? $this->isMobile = $value : parent::assignMember($name, $value),
            'is-ported' => is_bool($value) ? $this->isPorted = $value : parent::assignMember($name, $value),
            'is-roaming' => is_bool($value) ? $this->isRoaming = $value : parent::assignMember($name, $value),
            'local-number' => is_string($value) ? $this->localNumber = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'mcc' => is_string($value) ? $this->mcc = $value : parent::assignMember($name, $value),
            'mnc' => is_string($value) ? $this->mnc = $value : parent::assignMember($name, $value),
            'msc' => is_string($value) ? $this->msc = $value : parent::assignMember($name, $value),
            'msin' => is_string($value) ? $this->msin = $value : parent::assignMember($name, $value),
            'number-type' => is_string($value) ? $this->numberType = $value : parent::assignMember($name, $value),
            'number-valid' => is_bool($value) ? $this->numberValid = $value : parent::assignMember($name, $value),
            'origin-network' => is_string($value) ? $this->originNetwork = $value : parent::assignMember($name, $value),
            'ported-network' => is_string($value) ? $this->portedNetwork = $value : parent::assignMember($name, $value),
            'roaming-country-code' => is_string($value) ? $this->roamingCountryCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
