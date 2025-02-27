<?php

require_once __DIR__ . '/../interfaces/CheckBoxInterface.php';
class VisuallyImpairedCheckbox implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }

}