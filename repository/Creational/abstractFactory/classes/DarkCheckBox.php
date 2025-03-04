<?php


namespace abstractFactory\classes;

use abstractFactory\interfaces\CheckBoxInterface;

require_once __DIR__ . '/../interfaces/CheckBoxInterface.php';

class DarkCheckBox implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}