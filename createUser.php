<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
require_once __DIR__ . '/repository/decorator/DecoratorAppSettings.php';
require_once __DIR__ . '/repository/myDecorator/DecoratorApp.php';
require_once __DIR__ . '/repository/myDecorator/models/User.php';
//(new DecoratorAppSettings())->run();
$data = $_POST;
$user = new User();
$user->setUserData($data);
print_r((new DecoratorApp($user))->run());

