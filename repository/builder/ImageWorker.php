<?php

class ImageWorker
{
    private $imageBuilder;

    public function setBuilder(ImageBuilderInterface $imageBuilder)
    {
        $this->imageBuilder = $imageBuilder;
    }


    public function sepia()
    {
        $this->imageBuilder->setSepia(90);
        return $this->imageBuilder->getImage();

    }
    public function blackWhite()
    {

        $this->imageBuilder->setImageColorspace('gray');
        return $this->imageBuilder->getImage();
    }
    public function vintage()
    {
        $this->imageBuilder->setSepia(80);
        $this->imageBuilder->setModulate(100,80,100);
        $this->imageBuilder->setColorize('#996633',0.3);
        $this->imageBuilder->setNoise('gaussian');
        return $this->imageBuilder->getImage();

    }
    public function grange()
    {
        $this->imageBuilder->setNoise('impulse');
        $this->imageBuilder->setColorize('#333333',0.5);
        $this->imageBuilder->setVignette(20,20,0,0);
        return $this->imageBuilder->getImage();
    }
    public function polaroid()
    {
        $this->imageBuilder->setBorder('white',20,20);
        $this->imageBuilder->setBackground('white');
        $this->imageBuilder->setGravity('center');
        $this->imageBuilder->setExtent(40,40);
        return $this->imageBuilder->getImage();
    }
    public function crossProcess()
    {
        $this->imageBuilder->setColorize('#FFDD00',0.3);
        $this->imageBuilder->setModulate(100,150,100);
        return $this->imageBuilder->getImage();
    }
    public function cinema()
    {
        $this->imageBuilder->setSepia(70);
        $this->imageBuilder->setNoise('gaussian');
        return $this->imageBuilder->getImage();
    }
    public function aqua()
    {
        $this->imageBuilder->setOilPaint(3);
        $this->imageBuilder->setBlur(5,3);
        return $this->imageBuilder->getImage();
    }
}