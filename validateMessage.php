<?php

use chainOfResponsibility\executesAllChains\ValidateMessageChain;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");

require_once __DIR__ . '/repository/Behavioral/chainOfResponsibility/executesAllChains/ValidateMessageChain.php';

$message = $_GET['message'];
$chain = new ValidateMessageChain();
$chain->run($message);