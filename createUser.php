<?php


use decorator\DecoratorAppSettings;

use myDecorator\DecoratorApp;
use myDecorator\models\User;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
//require_once __DIR__ . '/repository/Structural/decorator/DecoratorAppSettings.php';
//(new DecoratorAppSettings())->run();
//не ожидает ничего
require_once __DIR__ . '/repository/Structural/myDecorator/DecoratorApp.php';
require_once __DIR__ . '/repository/Structural/myDecorator/models/User.php';
$data = $_POST;
//Ожидает name,password ?phone, ?email
$user = new User();
$user->setUserData($data);
print_r((new DecoratorApp($user))->run());

