<?php

require_once __DIR__ . '/../interfaces/ButtonInterface.php';
class DarkButton implements ButtonInterface
{

    public function draw()
    {
        return __CLASS__;
    }
}