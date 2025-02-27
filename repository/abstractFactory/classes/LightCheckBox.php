<?php

require_once __DIR__ . '/../interfaces/CheckBoxInterface.php';

class LightCheckBox implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}