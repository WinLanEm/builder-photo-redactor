<?php


require_once __DIR__ . '/../interfaces/CheckBoxInterface.php';
class DarkCheckBox implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}