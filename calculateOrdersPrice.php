<?php

use composite\OrderPriceComposite;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");

require_once __DIR__ . '/repository/Structural/composite/OrderPriceComposite.php';

(new OrderPriceComposite())->run();
