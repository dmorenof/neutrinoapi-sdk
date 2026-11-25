<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\BrowserBot;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array PROPERTY_MAP = [
    'ignore-certificate-errors' => 'ignoreCertificateErrors',
    'user-agent' => 'userAgent',
];
    protected const array WIRE_PROPERTY_MAP = [
    'ignoreCertificateErrors' => 'ignore-certificate-errors',
    'userAgent' => 'user-agent',
];

    protected const array VALIDATION = [
    'delay' => [
        'format' => 'int32',
    ],
    'timeout' => [
        'format' => 'int32',
    ],
];

    /**
     * Delay in seconds to wait before capturing any page data, executing selectors or JavaScript
     * Format: int32
     */
    public int $delay {
        set {
            $this->assigning('delay', $value);
            $this->delay = $value;
        }
    }
    /**
     * Execute JavaScript on the website. This parameter accepts JavaScript as either a string containing JavaScript or for sending multiple separate statements a JSON array or POST array can also be used. If a statement returns any value it will be returned in the 'exec-results' response. You can also use the following specially defined user interaction functions: <br> <br> <div> sleep(seconds); Just wait/sleep for the specified number of seconds. <br>click('selector'); Click on the first element matching the given selector. <br>focus('selector'); Focus on the first element matching the given selector. <br>keys('characters'); Send the specified keyboard characters. Use click() or focus() first to send keys to a specific element. <br>enter(); Send the Enter key. <br>tab(); Send the Tab key. <br> </div>
     */
    public \NeutrinoAPISDK\Collections\StringCollection $exec;
    /**
     * Ignore any TLS/SSL certificate errors and load the page anyway
     */
    public bool $ignoreCertificateErrors;
    /**
     * Extract content from the page DOM using this selector. Commonly known as a CSS selector, you can find a good reference <a href="https://www.w3schools.com/cssref/css_selectors.asp">here</a>
     */
    public string $selector;
    /**
     * Timeout in seconds. Give up if still trying to load the page after this number of seconds
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }
    /**
     * The URL to load
     */
    public string $url;
    /**
     * Override the browsers default user-agent string with this one
     */
    public string $userAgent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delay' => is_int($value) ? $this->delay = $value : parent::assignMember($name, $value),
            'exec' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->exec = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ignore-certificate-errors' => is_bool($value) ? $this->ignoreCertificateErrors = $value : parent::assignMember($name, $value),
            'selector' => is_string($value) ? $this->selector = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'user-agent' => is_string($value) ? $this->userAgent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
