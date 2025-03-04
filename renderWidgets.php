<?php

use bridge\WidgetBridge;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . '/repository/Structural/bridge/WidgetBridge.php';
(new WidgetBridge())->run();