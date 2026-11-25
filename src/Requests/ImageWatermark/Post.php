<?php

declare(strict_types=1);

namespace NeutrinoAPISDK\Requests\ImageWatermark;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'imageUrl',
        'watermarkUrl',
    ];

    protected const array PROPERTY_MAP = [
        'bg-color' => 'bgColor',
        'image-url' => 'imageUrl',
        'resize-mode' => 'resizeMode',
        'watermark-url' => 'watermarkUrl',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'bgColor' => 'bg-color',
        'imageUrl' => 'image-url',
        'resizeMode' => 'resize-mode',
        'watermarkUrl' => 'watermark-url',
    ];

    protected const array VALIDATION = [
        'height' => [
            'format' => 'int32',
        ],
        'opacity' => [
            'format' => 'int32',
        ],
        'width' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The image background color in hexadecimal notation (e.g. #0000ff). For PNG output the special value of 'transparent' can also be used. For JPG output the default is black (#000000)
     */
    public string $bgColor;
    /**
     * The output image format, can be either png or jpg
     */
    public string $format;
    /**
     * If set resize the resulting image to this height (in px)
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * The URL or Base64 encoded Data URL for the source image. You can also upload an image file directly using multipart/form-data
     */
    public string $imageUrl;
    /**
     * The opacity of the watermark (0 to 100)
     * Format: int32
     */
    public int $opacity {
        set {
            $this->assigning('opacity', $value);
            $this->opacity = $value;
        }
    }
    /**
     * The position of the watermark image, possible values are: <br>center, top-left, top-center, top-right, bottom-left, bottom-center, bottom-right
     */
    public string $position;
    /**
     * The resize mode to use, we support 3 main resizing modes: <ul> <li><b>scale</b><br>Resize to within the width and height specified while preserving aspect ratio. In this mode the width or height will be automatically adjusted to fit the aspect ratio</li> <li><b>pad</b><br>Resize to exactly the width and height specified while preserving aspect ratio and pad any space left over. Any padded space will be filled in with the 'bg-color' value</li> <li><b>crop</b><br>Resize to exactly the width and height specified while preserving aspect ratio and crop any space which fall outside the area. The cropping window is centered on the original image</li> </ul>
     */
    public string $resizeMode;
    /**
     * The URL or Base64 encoded Data URL for the watermark image. You can also upload an image file directly using multipart/form-data
     */
    public string $watermarkUrl;
    /**
     * If set resize the resulting image to this width (in px)
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
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'image-url' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'opacity' => is_int($value) ? $this->opacity = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = $value : parent::assignMember($name, $value),
            'resize-mode' => is_string($value) ? $this->resizeMode = $value : parent::assignMember($name, $value),
            'watermark-url' => is_string($value) ? $this->watermarkUrl = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
