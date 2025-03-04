<?php

use strategy\SalaryManager;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
require_once __DIR__ . '/repository/Behavioral/strategy/SalaryManager.php';
$data = json_decode(file_get_contents("php://input"),true);
$result = (new SalaryManager($data['period'],$data['employees']))->handle();
print_r($result);
