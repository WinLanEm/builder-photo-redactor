<?php

use facade\OrderSaveFacade;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
require_once __DIR__ . '/repository/Structural/facade/OrderSaveFacade.php';
$request = isset($_POST)?$_POST:"";
(new OrderSaveFacade())->save($request);