<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\HtmlRender;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
    ];

    protected const array PROPERTY_MAP = [
        'ignore-certificate-errors' => 'ignoreCertificateErrors',
        'image-height' => 'imageHeight',
        'image-width' => 'imageWidth',
        'margin-bottom' => 'marginBottom',
        'margin-left' => 'marginLeft',
        'margin-right' => 'marginRight',
        'margin-top' => 'marginTop',
        'page-height' => 'pageHeight',
        'page-size' => 'pageSize',
        'page-width' => 'pageWidth',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'ignoreCertificateErrors' => 'ignore-certificate-errors',
        'imageHeight' => 'image-height',
        'imageWidth' => 'image-width',
        'marginBottom' => 'margin-bottom',
        'marginLeft' => 'margin-left',
        'marginRight' => 'margin-right',
        'marginTop' => 'margin-top',
        'pageHeight' => 'page-height',
        'pageSize' => 'page-size',
        'pageWidth' => 'page-width',
    ];

    protected const array VALIDATION = [
        'delay' => [
            'format' => 'int32',
        ],
        'imageHeight' => [
            'format' => 'int32',
        ],
        'imageWidth' => [
            'format' => 'int32',
        ],
        'timeout' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The HTML content. This can be either a URL to load from, a file upload (multipart/form-data) or an HTML content string
     */
    public string $content;
    /**
     * Inject custom CSS into the HTML. e.g. 'body { background-color: red;}'
     */
    public string $css;
    /**
     * Number of seconds to wait before rendering the page (can be useful for pages with animations etc)
     * Format: int32
     */
    public int $delay {
        set {
            $this->assigning('delay', $value);
            $this->delay = $value;
        }
    }
    /**
     * The footer HTML to insert into each page. The following dynamic tags are supported: {date}, {title}, {url}, {pageNumber}, {totalPages}
     */
    public string $footer;
    /**
     * Which format to output, available options are: PDF, PNG, JPG
     */
    public string $format;
    /**
     * Render the final document in grayscale
     */
    public bool $grayscale;
    /**
     * The header HTML to insert into each page. The following dynamic tags are supported: {date}, {title}, {url}, {pageNumber}, {totalPages}
     */
    public string $header;
    /**
     * Ignore any TLS/SSL certificate errors
     */
    public bool $ignoreCertificateErrors;
    /**
     * If rendering to an image format (PNG or JPG) use this image height (in pixels). The default is automatic which dynamically sets the image height based on the content
     * Format: int32
     */
    public int $imageHeight {
        set {
            $this->assigning('imageHeight', $value);
            $this->imageHeight = $value;
        }
    }
    /**
     * If rendering to an image format (PNG or JPG) use this image width (in pixels)
     * Format: int32
     */
    public int $imageWidth {
        set {
            $this->assigning('imageWidth', $value);
            $this->imageWidth = $value;
        }
    }
    /**
     * Set the document to landscape orientation
     */
    public bool $landscape;
    /**
     * The document margin (in mm)
     * Format: double
     */
    public float $margin;
    /**
     * The document bottom margin (in mm)
     * Format: double
     */
    public float $marginBottom;
    /**
     * The document left margin (in mm)
     * Format: double
     */
    public float $marginLeft;
    /**
     * The document right margin (in mm)
     * Format: double
     */
    public float $marginRight;
    /**
     * The document top margin (in mm)
     * Format: double
     */
    public float $marginTop;
    /**
     * Set the PDF page height explicitly (in mm)
     * Format: double
     */
    public float $pageHeight;
    /**
     * Set the document page size, can be one of: A0 - A9, B0 - B10, Comm10E, DLE or Letter
     */
    public string $pageSize;
    /**
     * Set the PDF page width explicitly (in mm)
     * Format: double
     */
    public float $pageWidth;
    /**
     * Timeout in seconds. Give up if still trying to load the HTML content after this number of seconds
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }
    /**
     * The document title
     */
    public string $title;
    /**
     * Set the zoom factor when rendering the page (2.0 for double size, 0.5 for half size)
     * Format: double
     */
    public float $zoom;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'css' => is_string($value) ? $this->css = $value : parent::assignMember($name, $value),
            'delay' => is_int($value) ? $this->delay = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'grayscale' => is_bool($value) ? $this->grayscale = $value : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'ignore-certificate-errors' => is_bool($value) ? $this->ignoreCertificateErrors = $value : parent::assignMember($name, $value),
            'image-height' => is_int($value) ? $this->imageHeight = $value : parent::assignMember($name, $value),
            'image-width' => is_int($value) ? $this->imageWidth = $value : parent::assignMember($name, $value),
            'landscape' => is_bool($value) ? $this->landscape = $value : parent::assignMember($name, $value),
            'margin' => is_float($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'margin-bottom' => is_float($value) ? $this->marginBottom = $value : parent::assignMember($name, $value),
            'margin-left' => is_float($value) ? $this->marginLeft = $value : parent::assignMember($name, $value),
            'margin-right' => is_float($value) ? $this->marginRight = $value : parent::assignMember($name, $value),
            'margin-top' => is_float($value) ? $this->marginTop = $value : parent::assignMember($name, $value),
            'page-height' => is_float($value) ? $this->pageHeight = $value : parent::assignMember($name, $value),
            'page-size' => is_string($value) ? $this->pageSize = $value : parent::assignMember($name, $value),
            'page-width' => is_float($value) ? $this->pageWidth = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'zoom' => is_float($value) ? $this->zoom = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
