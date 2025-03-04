<?php

namespace abstractFactory\classes;

use abstractFactory\interfaces\ButtonInterface;

require_once __DIR__ . '/../interfaces/ButtonInterface.php';

class DarkButton implements ButtonInterface
{

    public function draw()
    {
        return __CLASS__;
    }
}