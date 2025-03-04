<?php

namespace builder;
class Image
{
    private $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setFormat()
    {
        $this->image->setImageFormat('jpeg');
        return $this->image->getImageBlob();
    }

}