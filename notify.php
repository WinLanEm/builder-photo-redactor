<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . '/repository/eventChannel/classes/EventChannelJob.php';

$channelJob = new EventChannelJob();
$channelJob->run();
