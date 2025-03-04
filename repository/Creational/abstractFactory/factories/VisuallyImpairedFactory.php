<?php

namespace abstractFactory\factories;

use abstractFactory\classes\VisuallyImpairedButton;
use abstractFactory\classes\VisuallyImpairedCheckbox;
use abstractFactory\interfaces\ButtonInterface;
use abstractFactory\interfaces\CheckBoxInterface;
use abstractFactory\interfaces\ModeFactoryInterface;

require_once __DIR__ . '/../interfaces/ModeFactoryInterface.php';
require_once __DIR__ . '/../classes/VisuallyImpairedButton.php';
require_once __DIR__ . '/../classes/VisuallyImpairedCheckbox.php';

class VisuallyImpairedFactory implements ModeFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new VisuallyImpairedButton();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new VisuallyImpairedCheckbox();
    }
}