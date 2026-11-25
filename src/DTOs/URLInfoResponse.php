<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * URLInfoResponse
 */
final class URLInfoResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'contentEncoding',
        'contentSize',
        'contentType',
        'httpOk',
        'httpRedirect',
        'httpStatus',
        'httpStatusMessage',
        'isError',
        'isTimeout',
        'languageCode',
        'loadTime',
        'query',
        'real',
        'serverCity',
        'serverCountry',
        'serverCountryCode',
        'serverHostname',
        'serverIp',
        'serverName',
        'serverRegion',
        'title',
        'url',
        'urlPath',
        'urlPort',
        'urlProtocol',
        'valid',
    ];

    protected const array PROPERTY_MAP = [
        'content-encoding' => 'contentEncoding',
        'content-size' => 'contentSize',
        'content-type' => 'contentType',
        'http-ok' => 'httpOk',
        'http-redirect' => 'httpRedirect',
        'http-status' => 'httpStatus',
        'http-status-message' => 'httpStatusMessage',
        'is-error' => 'isError',
        'is-timeout' => 'isTimeout',
        'language-code' => 'languageCode',
        'load-time' => 'loadTime',
        'server-city' => 'serverCity',
        'server-country' => 'serverCountry',
        'server-country-code' => 'serverCountryCode',
        'server-hostname' => 'serverHostname',
        'server-ip' => 'serverIp',
        'server-name' => 'serverName',
        'server-region' => 'serverRegion',
        'url-path' => 'urlPath',
        'url-port' => 'urlPort',
        'url-protocol' => 'urlProtocol',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'contentEncoding' => 'content-encoding',
        'contentSize' => 'content-size',
        'contentType' => 'content-type',
        'httpOk' => 'http-ok',
        'httpRedirect' => 'http-redirect',
        'httpStatus' => 'http-status',
        'httpStatusMessage' => 'http-status-message',
        'isError' => 'is-error',
        'isTimeout' => 'is-timeout',
        'languageCode' => 'language-code',
        'loadTime' => 'load-time',
        'serverCity' => 'server-city',
        'serverCountry' => 'server-country',
        'serverCountryCode' => 'server-country-code',
        'serverHostname' => 'server-hostname',
        'serverIp' => 'server-ip',
        'serverName' => 'server-name',
        'serverRegion' => 'server-region',
        'urlPath' => 'url-path',
        'urlPort' => 'url-port',
        'urlProtocol' => 'url-protocol',
    ];

    protected const array VALIDATION = [
        'contentSize' => [
            'format' => 'int32',
        ],
        'httpStatus' => [
            'format' => 'int32',
        ],
        'httpStatusMessage' => [
            'format' => 'int32',
        ],
        'urlPort' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The actual content this URL responded with. Only set if the 'fetch-content' option was used
     */
    public string $content;
    /**
     * The encoding format the URL uses
     */
    public string $contentEncoding;
    /**
     * The size of the URL content in bytes
     * Format: int32
     */
    public int $contentSize {
        set {
            $this->assigning('contentSize', $value);
            $this->contentSize = $value;
        }
    }
    /**
     * The content-type this URL serves
     */
    public string $contentType;
    /**
     * True if this URL responded with an HTTP OK (200) status
     */
    public bool $httpOk;
    /**
     * True if this URL responded with an HTTP redirect
     */
    public bool $httpRedirect;
    /**
     * The HTTP status code this URL responded with. An HTTP status of 0 indicates a network level issue
     * Format: int32
     */
    public int $httpStatus {
        set {
            $this->assigning('httpStatus', $value);
            $this->httpStatus = $value;
        }
    }
    /**
     * The HTTP status message assoicated with the status code
     * Format: int32
     */
    public int $httpStatusMessage {
        set {
            $this->assigning('httpStatusMessage', $value);
            $this->httpStatusMessage = $value;
        }
    }
    /**
     * True if an error occurred while loading the URL. This includes network errors, TLS errors and timeouts
     */
    public bool $isError;
    /**
     * True if a timeout occurred while loading the URL. You can set the timeout with the request parameter 'timeout'
     */
    public bool $isTimeout;
    /**
     * The ISO 2-letter language code of the page. Extracted from either the HTML document or via HTTP headers
     */
    public string $languageCode;
    /**
     * The time taken to load the URL content in seconds
     * Format: double
     */
    public float $loadTime;
    /**
     * A key-value map of the URL query paramaters
     */
    public \NeutrinoAPISDK\DTOs\URLInfoResponse\QueryMap $query;
    /**
     * Is this URL actually serving real content
     */
    public bool $real;
    /**
     * The servers IP geo-location: full city name (if detectable)
     */
    public string $serverCity;
    /**
     * The servers IP geo-location: full country name
     */
    public string $serverCountry;
    /**
     * The servers IP geo-location: ISO 2-letter country code
     */
    public string $serverCountryCode;
    /**
     * The servers hostname (PTR record)
     */
    public string $serverHostname;
    /**
     * The IP address of the server hosting this URL
     */
    public string $serverIp;
    /**
     * The name of the server software hosting this URL
     */
    public string $serverName;
    /**
     * The servers IP geo-location: full region name (if detectable)
     */
    public string $serverRegion;
    /**
     * The document title
     */
    public string $title;
    /**
     * The fully qualified URL. This may be different to the URL requested if http-redirect is true
     */
    public string $url;
    /**
     * The URL path
     */
    public string $urlPath;
    /**
     * The URL port
     * Format: int32
     */
    public int $urlPort {
        set {
            $this->assigning('urlPort', $value);
            $this->urlPort = $value;
        }
    }
    /**
     * The URL protocol, usually http or https
     */
    public string $urlProtocol;
    /**
     * Is this a valid well-formed URL
     */
    public bool $valid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'content-encoding' => is_string($value) ? $this->contentEncoding = $value : parent::assignMember($name, $value),
            'content-size' => is_int($value) ? $this->contentSize = $value : parent::assignMember($name, $value),
            'content-type' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'http-ok' => is_bool($value) ? $this->httpOk = $value : parent::assignMember($name, $value),
            'http-redirect' => is_bool($value) ? $this->httpRedirect = $value : parent::assignMember($name, $value),
            'http-status' => is_int($value) ? $this->httpStatus = $value : parent::assignMember($name, $value),
            'http-status-message' => is_int($value) ? $this->httpStatusMessage = $value : parent::assignMember($name, $value),
            'is-error' => is_bool($value) ? $this->isError = $value : parent::assignMember($name, $value),
            'is-timeout' => is_bool($value) ? $this->isTimeout = $value : parent::assignMember($name, $value),
            'language-code' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'load-time' => is_float($value) ? $this->loadTime = $value : parent::assignMember($name, $value),
            'real' => is_bool($value) ? $this->real = $value : parent::assignMember($name, $value),
            'server-city' => is_string($value) ? $this->serverCity = $value : parent::assignMember($name, $value),
            'server-country' => is_string($value) ? $this->serverCountry = $value : parent::assignMember($name, $value),
            'server-country-code' => is_string($value) ? $this->serverCountryCode = $value : parent::assignMember($name, $value),
            'server-hostname' => is_string($value) ? $this->serverHostname = $value : parent::assignMember($name, $value),
            'server-ip' => is_string($value) ? $this->serverIp = $value : parent::assignMember($name, $value),
            'server-name' => is_string($value) ? $this->serverName = $value : parent::assignMember($name, $value),
            'server-region' => is_string($value) ? $this->serverRegion = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'url-path' => is_string($value) ? $this->urlPath = $value : parent::assignMember($name, $value),
            'url-port' => is_int($value) ? $this->urlPort = $value : parent::assignMember($name, $value),
            'url-protocol' => is_string($value) ? $this->urlProtocol = $value : parent::assignMember($name, $value),
            'valid' => is_bool($value) ? $this->valid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
