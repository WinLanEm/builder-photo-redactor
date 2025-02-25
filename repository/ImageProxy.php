<?php

require_once 'builder/ImageBuilderInterface.php';
require_once 'builder/ImageWorker.php';
require_once 'builder/ImageBuilder.php';


class ImageProxy
{
    private $imagePath;
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
        $this->builder = new ImageBuilder($this->image);
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
            case "vintage":{
                return $this->worker->vintage();
            }
            case 'grange':{
                return $this->worker->grange();
            }
            case "polaroid":{
                return $this->worker->polaroid();
            }
            case "cross-process":{
                return $this->worker->crossProcess();
            }
            case "cinema":{
                return $this->worker->cinema();
            }
            case 'aqua':{
                return $this->worker->aqua();
            }
            default:
                throw new InvalidArgumentException("Неизвестный стиль: {$this->style}");
        }
    }
}