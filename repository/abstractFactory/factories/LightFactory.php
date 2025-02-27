<?php

require_once __DIR__ . '/../classes/LightButton.php';
require_once __DIR__ . '/../classes/LightCheckBox.php';
require_once __DIR__ . '/../interfaces/ModeFactoryInterface.php';

class LightFactory implements ModeFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new LightButton();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new LightCheckBox();
    }
}