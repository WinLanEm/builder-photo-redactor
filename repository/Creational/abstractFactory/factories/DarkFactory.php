<?php

namespace abstractFactory\factories;

use abstractFactory\classes\DarkButton;
use abstractFactory\classes\DarkCheckBox;
use abstractFactory\interfaces\ButtonInterface;
use abstractFactory\interfaces\CheckBoxInterface;
use abstractFactory\interfaces\ModeFactoryInterface;

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