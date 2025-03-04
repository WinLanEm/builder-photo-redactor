<?php

namespace abstractFactory\classes;

use abstractFactory\interfaces\ButtonInterface;

require_once __DIR__ . '/../interfaces/ButtonInterface.php';

class VisuallyImpairedButton implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }

}