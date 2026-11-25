<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\HtmlClean;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'outputType',
];

    protected const array PROPERTY_MAP = [
    'output-type' => 'outputType',
];
    protected const array WIRE_PROPERTY_MAP = [
    'outputType' => 'output-type',
];

    /**
     * The HTML content. This can be either a URL to load from, a file upload (multipart/form-data) or an HTML content string
     */
    public string $content;
    /**
     * The level of sanitization, possible values are: <br><b>plain-text</b>: reduce the content to plain text only (no HTML tags at all) <br><b>simple-text</b>: allow only very basic text formatting tags like b, em, i, strong, u <br><b>basic-html</b>: allow advanced text formatting and hyper links <br><b>basic-html-with-images</b>: same as basic html but also allows image tags <br><b>advanced-html</b>: same as basic html with images but also allows many more common HTML tags like table, ul, dl, pre <br>
     */
    public string $outputType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'output-type' => is_string($value) ? $this->outputType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
