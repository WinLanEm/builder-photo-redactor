<?php

namespace Proxy;

use builder\Image;
use builder\ImageBuilder;
use builder\ImageWorker;

require_once __DIR__ . '/../builder/ImageBuilderInterface.php';
require_once __DIR__ . '/../builder/ImageWorker.php';
require_once __DIR__ . '/../builder/ImageBuilder.php';
require_once __DIR__ . '/../builder/Image.php';


class ImageProxy
{
    private $imagePath;
    private $imageSing;
    private $style;
    private $worker;
    private $builder;
    private $image;

    public function __construct()
    {
        $this->worker = new ImageWorker();
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath): void
    {
        $this->imagePath = $imagePath;
        $this->image = new Imagick($this->imagePath);
        $this->imageSing = new Image();
        $this->imageSing->setImage($this->image);
        $this->builder = new ImageBuilder($this->imageSing);
        $this->worker->setBuilder($this->builder);
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style): void
    {
        $this->style = $style;
    }

    public function showFilteredImage()
    {
        switch ($this->style) {
            case "sepia":
                return $this->worker->sepia();
            case "black-white":
                return $this->worker->blackWhite(); // Здесь нужно добавить логику для black-vite
            case "vintage":
            {
                return $this->worker->vintage();
            }
            case 'grange':
            {
                return $this->worker->grange();
            }
            case "polaroid":
            {
                return $this->worker->polaroid();
            }
            case "cross-process":
            {
                return $this->worker->crossProcess();
            }
            case "cinema":
            {
                return $this->worker->cinema();
            }
            case 'aqua':
            {
                return $this->worker->aqua();
            }
            default:
                throw new InvalidArgumentException("Неизвестный стиль: {$this->style}");
        }
    }
}