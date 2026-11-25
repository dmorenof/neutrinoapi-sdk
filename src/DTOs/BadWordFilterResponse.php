<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * BadWordFilterResponse
 */
final class BadWordFilterResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'badWordsList',
    'badWordsTotal',
    'censoredContent',
    'isBad',
];

    protected const array PROPERTY_MAP = [
    'bad-words-list' => 'badWordsList',
    'bad-words-total' => 'badWordsTotal',
    'censored-content' => 'censoredContent',
    'is-bad' => 'isBad',
];
    protected const array WIRE_PROPERTY_MAP = [
    'badWordsList' => 'bad-words-list',
    'badWordsTotal' => 'bad-words-total',
    'censoredContent' => 'censored-content',
    'isBad' => 'is-bad',
];

    protected const array VALIDATION = [
    'badWordsTotal' => [
        'format' => 'int32',
    ],
];

    /**
     * An array of the bad words found
     */
    public \NeutrinoAPISDK\Collections\StringCollection $badWordsList;
    /**
     * Total number of bad words detected
     * Format: int32
     */
    public int $badWordsTotal {
        set {
            $this->assigning('badWordsTotal', $value);
            $this->badWordsTotal = $value;
        }
    }
    /**
     * The censored content (only set if censor-character has been set)
     */
    public string $censoredContent;
    /**
     * Does the text contain bad words
     */
    public bool $isBad;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bad-words-list' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->badWordsList = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'bad-words-total' => is_int($value) ? $this->badWordsTotal = $value : parent::assignMember($name, $value),
            'censored-content' => is_string($value) ? $this->censoredContent = $value : parent::assignMember($name, $value),
            'is-bad' => is_bool($value) ? $this->isBad = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
