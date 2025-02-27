<?php

require_once 'ButtonInterface.php';
require_once 'CheckBoxInterface.php';

interface ModeFactoryInterface
{
    public function buildButton():ButtonInterface;
    public function buildCheckBox():CheckBoxInterface;
}