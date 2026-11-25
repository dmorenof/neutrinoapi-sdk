<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\BadWordFilter;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array PROPERTY_MAP = [
    'censor-character' => 'censorCharacter',
];
    protected const array WIRE_PROPERTY_MAP = [
    'censorCharacter' => 'censor-character',
];

    /**
     * Which catalog of bad words to use, we currently maintain two bad word catalogs: <br> <ul> <li>strict - the largest database of bad words which includes profanity, obscenity, sexual, rude, cuss, dirty, swear and objectionable words and phrases. This catalog is suitable for environments of all ages including educational or children's content</li> <li>obscene - like the strict catalog but does not include any mild profanities, idiomatic phrases or words which are considered formal terminology. This catalog is suitable for adult environments where certain types of bad words are considered OK</li> </ul>
     */
    public string $catalog;
    /**
     * The character to use to censor out the bad words found
     */
    public string $censorCharacter;
    /**
     * The content to scan. This can be either a URL to load from, a file upload (multipart/form-data) or an HTML content string
     */
    public string $content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'catalog' => is_string($value) ? $this->catalog = $value : parent::assignMember($name, $value),
            'censor-character' => is_string($value) ? $this->censorCharacter = $value : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
