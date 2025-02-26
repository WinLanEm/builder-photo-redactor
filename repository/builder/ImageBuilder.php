<?php

class ImageBuilder implements ImageBuilderInterface
{
    private $imageSign;
    private $image;
    public function __construct(Image $image)
    {
        $this->imageSign = $image;
        $this->reset($image->getImage());
    }
    public function reset($image)
    {
        $this->image = $image;
    }
    public function setSepia(int $param): void
    {
        $this->image->sepiaToneImage($param);
    }

    public function setImageColorspace(string $param): void
    {
        $constantName = "Imagick::COLORSPACE_" . strtoupper($param);
        if (!defined($constantName)) {
            throw new InvalidArgumentException("Неизвестная цветовая схема: $param");
        };
        $colorSpace = constant($constantName);
        $this->image->setImageColorspace($colorSpace);
    }

    public function setModulate(int $param1,int $param2,int $param3): void
    {
        $this->image->modulateImage($param1,$param2,$param3);
    }

    public function setColorize(string $hex,float $opacity): void
    {
        $opacityColor = new \ImagickPixel("rgba(0, 0, 0, $opacity)");
        $this->image->colorizeImage('#996633',$opacityColor);
    }

    public function setNoise(string $param): void
    {
        $constantName = "Imagick::NOISE_" . strtoupper($param);
        if (!defined($constantName)) {
            throw new InvalidArgumentException("Неизвестная цветовая схема: $param");
        }
        $colorSpace = constant($constantName);
        $this->image->addNoiseImage($colorSpace);
    }

    public function setVignette(int $param1,int $param2,int $param3, int $param4): void
    {
        $this->image->vignetteImage($param1,$param2,$param3,$param4);
    }

    public function setBorder(string $param1,int $param2,int $param3): void
    {
        $this->image->borderImage($param1,$param2,$param3);
    }

    public function setBackground(string $param): void
    {
        $this->image->setImageBackgroundColor($param);
    }

    public function setGravity(string $param): void
    {
        $constantName = "Imagick::GRAVITY_" . strtoupper($param);
        if (!defined($constantName)) {
            throw new InvalidArgumentException("Неизвестная цветовая схема: $param");
        }
        $colorSpace = constant($constantName);
        $this->image->setImageGravity($colorSpace);
    }

    public function setExtent(int $width,int $height): void
    {
        $imageWidth = $this->image->getImageWidth();
        $imageHeight = $this->image->getImageHeight();
        $newWidth = $imageWidth + $width;
        $newHeight = $imageHeight + $height;

        $x = intval(($newWidth - $imageWidth) / 2);
        $y = intval(($newHeight - $imageHeight) / 2);
        $this->image->extentImage($newWidth, $newHeight, $x,$y);
    }

    public function setOilPaint(int $param): void
    {
        $this->image->oilPaintImage($param);
    }

    public function setBlur(int $param1,int $param2): void
    {
        $this->image->blurImage($param1,$param2);
    }
    public function getImage():string
    {
        $this->image->setImageFormat('jpeg');
        return $this->image->getImageBlob();
    }

}