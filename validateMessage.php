<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");

require_once __DIR__ . '/repository/chainOfResponsibility/executesAllChains/ValidateMessageChain.php';

$message = $_GET['message'];
$chain = new ValidateMessageChain();
$chain->run($message);