<?php

use abstractFactory\ModeFactory;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . '/repository/Creational/abstractFactory/ModeFactory.php';

$currentMode = isset($_GET['mode'])?$_GET['mode']:"";

$them = (new ModeFactory())->getFactory($currentMode);
$result[] = $them->buildButton()->draw();
$result[] = $them->buildCheckBox()->draw();

print_r($result);
//Абстрактная фабрика