<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * BrowserBotResponse
 */
final class BrowserBotResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'elements',
        'errorMessage',
        'execResults',
        'httpRedirectUrl',
        'httpStatusCode',
        'httpStatusMessage',
        'isError',
        'isHttpOk',
        'isHttpRedirect',
        'isSecure',
        'isTimeout',
        'languageCode',
        'loadTime',
        'mimeType',
        'responseHeaders',
        'securityDetails',
        'serverIp',
        'title',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'error-message' => 'errorMessage',
        'exec-results' => 'execResults',
        'http-redirect-url' => 'httpRedirectUrl',
        'http-status-code' => 'httpStatusCode',
        'http-status-message' => 'httpStatusMessage',
        'is-error' => 'isError',
        'is-http-ok' => 'isHttpOk',
        'is-http-redirect' => 'isHttpRedirect',
        'is-secure' => 'isSecure',
        'is-timeout' => 'isTimeout',
        'language-code' => 'languageCode',
        'load-time' => 'loadTime',
        'mime-type' => 'mimeType',
        'response-headers' => 'responseHeaders',
        'security-details' => 'securityDetails',
        'server-ip' => 'serverIp',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'errorMessage' => 'error-message',
        'execResults' => 'exec-results',
        'httpRedirectUrl' => 'http-redirect-url',
        'httpStatusCode' => 'http-status-code',
        'httpStatusMessage' => 'http-status-message',
        'isError' => 'is-error',
        'isHttpOk' => 'is-http-ok',
        'isHttpRedirect' => 'is-http-redirect',
        'isSecure' => 'is-secure',
        'isTimeout' => 'is-timeout',
        'languageCode' => 'language-code',
        'loadTime' => 'load-time',
        'mimeType' => 'mime-type',
        'responseHeaders' => 'response-headers',
        'securityDetails' => 'security-details',
        'serverIp' => 'server-ip',
    ];

    protected const array VALIDATION = [
        'httpStatusCode' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The complete raw, decompressed and decoded page content. Usually will be either HTML, JSON or XML
     */
    public string $content;
    /**
     * Array containing all the elements matching the supplied selector. <br>Each element object will contain the text content, HTML content and all current element attributes
     */
    public \NeutrinoAPISDK\Collections\StringCollection $elements;
    /**
     * Contains the error message if an error has occurred ('is-error' will be true)
     */
    public string $errorMessage;
    /**
     * If you executed any JavaScript this array holds the results as objects
     */
    public \NeutrinoAPISDK\Collections\StringCollection $execResults;
    /**
     * The redirected URL if the URL responded with an HTTP redirect
     */
    public string $httpRedirectUrl;
    /**
     * The HTTP status code the URL returned
     * Format: int32
     */
    public int $httpStatusCode {
        set {
            $this->assigning('httpStatusCode', $value);
            $this->httpStatusCode = $value;
        }
    }
    /**
     * The HTTP status message the URL returned
     */
    public string $httpStatusMessage;
    /**
     * True if an error has occurred loading the page. Check the 'error-message' field for details
     */
    public bool $isError;
    /**
     * True if the HTTP status is OK (200)
     */
    public bool $isHttpOk;
    /**
     * True if the URL responded with an HTTP redirect
     */
    public bool $isHttpRedirect;
    /**
     * True if the page is secured using TLS/SSL
     */
    public bool $isSecure;
    /**
     * True if a timeout occurred while loading the page. You can set the timeout with the request parameter 'timeout'
     */
    public bool $isTimeout;
    /**
     * The ISO 2-letter language code of the page. Extracted from either the HTML document or via HTTP headers
     */
    public string $languageCode;
    /**
     * The number of seconds taken to load the page (from initial request until DOM ready)
     * Format: double
     */
    public float $loadTime;
    /**
     * The document MIME type
     */
    public string $mimeType;
    /**
     * Map containing all the HTTP response headers the URL responded with
     */
    public \NeutrinoAPISDK\DTOs\BrowserBotResponse\HeadersMap $responseHeaders;
    /**
     * Map containing details of the TLS/SSL setup
     */
    public \NeutrinoAPISDK\DTOs\BrowserBotResponse\SecurityDetailsMap $securityDetails;
    /**
     * The HTTP servers IP address
     */
    public string $serverIp;
    /**
     * The document title
     */
    public string $title;
    /**
     * The page URL
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'elements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->elements = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'error-message' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            'exec-results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->execResults = new \NeutrinoAPISDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'http-redirect-url' => is_string($value) ? $this->httpRedirectUrl = $value : parent::assignMember($name, $value),
            'http-status-code' => is_int($value) ? $this->httpStatusCode = $value : parent::assignMember($name, $value),
            'http-status-message' => is_string($value) ? $this->httpStatusMessage = $value : parent::assignMember($name, $value),
            'is-error' => is_bool($value) ? $this->isError = $value : parent::assignMember($name, $value),
            'is-http-ok' => is_bool($value) ? $this->isHttpOk = $value : parent::assignMember($name, $value),
            'is-http-redirect' => is_bool($value) ? $this->isHttpRedirect = $value : parent::assignMember($name, $value),
            'is-secure' => is_bool($value) ? $this->isSecure = $value : parent::assignMember($name, $value),
            'is-timeout' => is_bool($value) ? $this->isTimeout = $value : parent::assignMember($name, $value),
            'language-code' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'load-time' => is_float($value) ? $this->loadTime = $value : parent::assignMember($name, $value),
            'mime-type' => is_string($value) ? $this->mimeType = $value : parent::assignMember($name, $value),
            'server-ip' => is_string($value) ? $this->serverIp = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
