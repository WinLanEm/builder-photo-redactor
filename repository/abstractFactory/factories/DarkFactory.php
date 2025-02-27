<?php

require_once __DIR__ . '/../interfaces/ModeFactoryInterface.php';
require_once __DIR__ . '/../classes/DarkButton.php';
require_once __DIR__ . '/../classes/DarkCheckBox.php';

class DarkFactory implements ModeFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new DarkButton();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new DarkCheckBox();
    }

}