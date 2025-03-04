<?php

use chainOfResponsibility\exitFirstCorrect\TaxiChain;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");

require_once __DIR__ . '/repository/Behavioral/chainOfResponsibility/exitFirstCorrect/TaxiChain.php';
$chain = new TaxiChain();
$chain->run();
