<?php

use myDecorator\DecoratorApp;
use state\classes\User;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
require_once __DIR__ . '/repository/Structural/decorator/DecoratorAppSettings.php';
require_once __DIR__ . '/repository/Structural/myDecorator/DecoratorApp.php';
require_once __DIR__ . '/repository/Structural/myDecorator/models/User.php';
//(new DecoratorAppSettings())->run();
$data = $_POST;
$user = new User();
$user->setUserData($data);
print_r((new DecoratorApp($user))->run());

