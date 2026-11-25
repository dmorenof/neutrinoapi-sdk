<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\DTOs;

/**
 * UALookupResponse
 */
final class UALookupResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'browserEngine',
    'browserRelease',
    'deviceBrand',
    'deviceHeightPx',
    'deviceModel',
    'deviceModelCode',
    'devicePixelRatio',
    'devicePpi',
    'devicePrice',
    'deviceRelease',
    'deviceResolution',
    'deviceWidthPx',
    'isMobile',
    'isWebview',
    'name',
    'os',
    'osFamily',
    'osVersion',
    'osVersionMajor',
    'type',
    'ua',
    'version',
    'versionMajor',
];

    protected const array PROPERTY_MAP = [
    'browser-engine' => 'browserEngine',
    'browser-release' => 'browserRelease',
    'device-brand' => 'deviceBrand',
    'device-height-px' => 'deviceHeightPx',
    'device-model' => 'deviceModel',
    'device-model-code' => 'deviceModelCode',
    'device-pixel-ratio' => 'devicePixelRatio',
    'device-ppi' => 'devicePpi',
    'device-price' => 'devicePrice',
    'device-release' => 'deviceRelease',
    'device-resolution' => 'deviceResolution',
    'device-width-px' => 'deviceWidthPx',
    'is-mobile' => 'isMobile',
    'is-webview' => 'isWebview',
    'os-family' => 'osFamily',
    'os-version' => 'osVersion',
    'os-version-major' => 'osVersionMajor',
    'version-major' => 'versionMajor',
];
    protected const array WIRE_PROPERTY_MAP = [
    'browserEngine' => 'browser-engine',
    'browserRelease' => 'browser-release',
    'deviceBrand' => 'device-brand',
    'deviceHeightPx' => 'device-height-px',
    'deviceModel' => 'device-model',
    'deviceModelCode' => 'device-model-code',
    'devicePixelRatio' => 'device-pixel-ratio',
    'devicePpi' => 'device-ppi',
    'devicePrice' => 'device-price',
    'deviceRelease' => 'device-release',
    'deviceResolution' => 'device-resolution',
    'deviceWidthPx' => 'device-width-px',
    'isMobile' => 'is-mobile',
    'isWebview' => 'is-webview',
    'osFamily' => 'os-family',
    'osVersion' => 'os-version',
    'osVersionMajor' => 'os-version-major',
    'versionMajor' => 'version-major',
];

    /**
     * If the client is a web browser which underlying browser engine does it use
     */
    public string $browserEngine;
    /**
     * If the client is a web browser which year was this browser version released
     */
    public string $browserRelease;
    /**
     * The device brand / manufacturer
     */
    public string $deviceBrand;
    /**
     * The device display height in CSS 'px'
     * Format: double
     */
    public float $deviceHeightPx;
    /**
     * The device model
     */
    public string $deviceModel;
    /**
     * The device model code
     */
    public string $deviceModelCode;
    /**
     * The device display pixel ratio (the ratio of the resolution in physical pixels to the resolution in CSS pixels)
     * Format: double
     */
    public float $devicePixelRatio;
    /**
     * The device display PPI (pixels per inch)
     * Format: double
     */
    public float $devicePpi;
    /**
     * The average device price on release in USD
     * Format: double
     */
    public float $devicePrice;
    /**
     * The year when this device model was released
     */
    public string $deviceRelease;
    /**
     * The device display resolution in physical pixels (e.g. 720x1280)
     */
    public string $deviceResolution;
    /**
     * The device display width in CSS 'px'
     * Format: double
     */
    public float $deviceWidthPx;
    /**
     * Is this a mobile device (e.g. a phone or tablet)
     */
    public bool $isMobile;
    /**
     * Is this a WebView / embedded software client
     */
    public bool $isWebview;
    /**
     * The client software name
     */
    public string $name;
    /**
     * The full operating system name
     */
    public string $os;
    /**
     * The operating system family. The major OS families are: Android, Windows, macOS, iOS, Linux
     */
    public string $osFamily;
    /**
     * The operating system full version
     */
    public string $osVersion;
    /**
     * The operating system major version
     */
    public string $osVersionMajor;
    /**
     * The user agent type, possible values are: <br> <ul> <li>desktop</li> <li>phone</li> <li>tablet</li> <li>wearable</li> <li>tv</li> <li>console</li> <li>email</li> <li>library</li> <li>robot</li> <li>unknown</li> </ul>
     */
    public string $type;
    /**
     * The user agent string
     */
    public string $ua;
    /**
     * The client software full version
     */
    public string $version;
    /**
     * The client software major version
     */
    public string $versionMajor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'browser-engine' => is_string($value) ? $this->browserEngine = $value : parent::assignMember($name, $value),
            'browser-release' => is_string($value) ? $this->browserRelease = $value : parent::assignMember($name, $value),
            'device-brand' => is_string($value) ? $this->deviceBrand = $value : parent::assignMember($name, $value),
            'device-height-px' => is_float($value) ? $this->deviceHeightPx = $value : parent::assignMember($name, $value),
            'device-model' => is_string($value) ? $this->deviceModel = $value : parent::assignMember($name, $value),
            'device-model-code' => is_string($value) ? $this->deviceModelCode = $value : parent::assignMember($name, $value),
            'device-pixel-ratio' => is_float($value) ? $this->devicePixelRatio = $value : parent::assignMember($name, $value),
            'device-ppi' => is_float($value) ? $this->devicePpi = $value : parent::assignMember($name, $value),
            'device-price' => is_float($value) ? $this->devicePrice = $value : parent::assignMember($name, $value),
            'device-release' => is_string($value) ? $this->deviceRelease = $value : parent::assignMember($name, $value),
            'device-resolution' => is_string($value) ? $this->deviceResolution = $value : parent::assignMember($name, $value),
            'device-width-px' => is_float($value) ? $this->deviceWidthPx = $value : parent::assignMember($name, $value),
            'is-mobile' => is_bool($value) ? $this->isMobile = $value : parent::assignMember($name, $value),
            'is-webview' => is_bool($value) ? $this->isWebview = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'os' => is_string($value) ? $this->os = $value : parent::assignMember($name, $value),
            'os-family' => is_string($value) ? $this->osFamily = $value : parent::assignMember($name, $value),
            'os-version' => is_string($value) ? $this->osVersion = $value : parent::assignMember($name, $value),
            'os-version-major' => is_string($value) ? $this->osVersionMajor = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'ua' => is_string($value) ? $this->ua = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            'version-major' => is_string($value) ? $this->versionMajor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
