<?php

require_once __DIR__ . '/../interfaces/ButtonInterface.php';

class LightButton implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}