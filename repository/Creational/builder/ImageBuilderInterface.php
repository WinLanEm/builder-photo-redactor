<?php

namespace builder;
interface ImageBuilderInterface
{
    public function setSepia(int $param): void;

    public function setImageColorspace(string $param): void;

    public function setModulate(int $param1, int $param2, int $param3): void;

    public function setColorize(string $hex, float $opacity): void;

    public function setNoise(string $param): void;

    public function setVignette(int $param1, int $param2, int $param3, int $param4): void;

    public function setBorder(string $param1, int $param2, int $param3): void;

    public function setBackground(string $param): void;

    public function setGravity(string $param): void;

    public function setExtent(int $width, int $height): void;

    public function setOilPaint(int $param): void;

    public function setBlur(int $param1, int $param2): void;

}