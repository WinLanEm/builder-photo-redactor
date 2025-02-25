<?php

class ImageWorker
{
    private $imageBuilder;

    public function setBuilder(ImageBuilderInterface $imageBuilder)
    {
        $this->imageBuilder = $imageBuilder;
    }

    public function getBuilder(): ImageBuilderInterface
    {
        return $this->imageBuilder;
    }

    public function sepia()
    {
        $builder = $this->getBuilder();
        $builder->setSepia(90);
        return $builder->getImage();

    }
    public function blackWhite()
    {
        $builder = $this->getBuilder();
        $builder->setImageColorspace('gray');
        return $builder->getImage();
    }
    public function vintage()
    {
        $builder = $this->getBuilder();
        $builder->setSepia(80);
        $builder->setModulate(100,80,100);
        $builder->setColorize('#996633',0.3);
        $builder->setNoise('gaussian');
        return $builder->getImage();

    }
    public function grange()
    {
        $builder = $this->getBuilder();
        $builder->setNoise('impulse');
        $builder->setColorize('#333333',0.5);
        $builder->setVignette(20,20,0,0);
        return $builder->getImage();
    }
    public function polaroid()
    {
        $builder = $this->getBuilder();
        $builder->setBorder('white',20,20);
        $builder->setBackground('white');
        $builder->setGravity('center');
        $builder->setExtent(40,40);
        return $builder->getImage();
    }
    public function crossProcess()
    {
        $builder = $this->getBuilder();
        $builder->setColorize('#FFDD00',0.3);
        $builder->setModulate(100,150,100);
        return $builder->getImage();
    }
    public function cinema()
    {
        $builder = $this->getBuilder();
        $builder->setSepia(70);
        $builder->setNoise('gaussian');
        return $builder->getImage();
    }
    public function aqua()
    {
        $builder = $this->getBuilder();
        $builder->setOilPaint(3);
        $builder->setBlur(5,3);
        return $builder->getImage();
    }
}