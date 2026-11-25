<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\PhonePlayback;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'audioUrl',
    'number',
];

    protected const array PROPERTY_MAP = [
    'audio-url' => 'audioUrl',
    'limit-ttl' => 'limitTtl',
];
    protected const array WIRE_PROPERTY_MAP = [
    'audioUrl' => 'audio-url',
    'limitTtl' => 'limit-ttl',
];

    protected const array VALIDATION = [
    'limit' => [
        'format' => 'int32',
    ],
    'limitTtl' => [
        'format' => 'int32',
    ],
];

    /**
     * A URL to a valid audio file. Accepted audio formats are: <ul> <li>MP3</li> <li>WAV</li> <li>OGG</li> </ul>You can use the following MP3 URL for testing: <br>https://www.neutrinoapi.com/test-files/test1.mp3
     */
    public string $audioUrl;
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
     * The phone number to call. Must be in valid international format
     */
    public string $number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audio-url' => is_string($value) ? $this->audioUrl = $value : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'limit-ttl' => is_int($value) ? $this->limitTtl = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
