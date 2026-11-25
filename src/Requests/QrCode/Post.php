<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\QrCode;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array PROPERTY_MAP = [
    'bg-color' => 'bgColor',
    'fg-color' => 'fgColor',
];
    protected const array WIRE_PROPERTY_MAP = [
    'bgColor' => 'bg-color',
    'fgColor' => 'fg-color',
];

    protected const array VALIDATION = [
    'height' => [
        'format' => 'int32',
    ],
    'width' => [
        'format' => 'int32',
    ],
];

    /**
     * The QR code background color
     */
    public string $bgColor;
    /**
     * The content to encode into the QR code (e.g. a URL or a phone number)
     */
    public string $content;
    /**
     * The QR code foreground color
     */
    public string $fgColor;
    /**
     * The height of the QR code (in px)
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * The width of the QR code (in px)
     * Format: int32
     */
    public int $width {
        set {
            $this->assigning('width', $value);
            $this->width = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bg-color' => is_string($value) ? $this->bgColor = $value : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'fg-color' => is_string($value) ? $this->fgColor = $value : parent::assignMember($name, $value),
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
