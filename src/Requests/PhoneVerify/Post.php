<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\PhoneVerify;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'number',
];

    protected const array PROPERTY_MAP = [
    'code-length' => 'codeLength',
    'country-code' => 'countryCode',
    'language-code' => 'languageCode',
    'limit-ttl' => 'limitTtl',
    'playback-delay' => 'playbackDelay',
    'security-code' => 'securityCode',
];
    protected const array WIRE_PROPERTY_MAP = [
    'codeLength' => 'code-length',
    'countryCode' => 'country-code',
    'languageCode' => 'language-code',
    'limitTtl' => 'limit-ttl',
    'playbackDelay' => 'playback-delay',
    'securityCode' => 'security-code',
];

    protected const array VALIDATION = [
    'codeLength' => [
        'format' => 'int32',
    ],
    'limit' => [
        'format' => 'int32',
    ],
    'limitTtl' => [
        'format' => 'int32',
    ],
    'playbackDelay' => [
        'format' => 'int32',
    ],
    'securityCode' => [
        'format' => 'int32',
    ],
];

    /**
     * The number of digits to use in the security code (between 4 and 12)
     * Format: int32
     */
    public int $codeLength {
        set {
            $this->assigning('codeLength', $value);
            $this->codeLength = $value;
        }
    }
    /**
     * ISO 2-letter country code, assume numbers are based in this country. <br>If not set numbers are assumed to be in international format (with or without the leading + sign)
     */
    public string $countryCode;
    /**
     * The language to playback the verification code in, available languages are: <ul> <li>de - German</li> <li>en - English</li> <li>es - Spanish</li> <li>fr - French</li> <li>it - Italian</li> <li>pt - Portuguese</li> <li>ru - Russian</li> </ul>
     */
    public string $languageCode;
    /**
     * Limit the total number of calls allowed to the supplied phone number, if the limit is reached within the TTL then error code 14 will be returned
     * Format: int32
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /**
     * Set the TTL in number of days that the 'limit' option will remember a phone number (the default is 1 day and the maximum is 365 days)
     * Format: int32
     */
    public int $limitTtl {
        set {
            $this->assigning('limitTtl', $value);
            $this->limitTtl = $value;
        }
    }
    /**
     * The phone number to send the verification code to
     */
    public string $number;
    /**
     * The delay in milliseconds between the playback of each security code
     * Format: int32
     */
    public int $playbackDelay {
        set {
            $this->assigning('playbackDelay', $value);
            $this->playbackDelay = $value;
        }
    }
    /**
     * Pass in your own security code. This is useful if you have implemented TOTP or similar 2FA methods. If not set then we will generate a secure random code
     * Format: int32
     */
    public int $securityCode {
        set {
            $this->assigning('securityCode', $value);
            $this->securityCode = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code-length' => is_int($value) ? $this->codeLength = $value : parent::assignMember($name, $value),
            'country-code' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'language-code' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'limit-ttl' => is_int($value) ? $this->limitTtl = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'playback-delay' => is_int($value) ? $this->playbackDelay = $value : parent::assignMember($name, $value),
            'security-code' => is_int($value) ? $this->securityCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
