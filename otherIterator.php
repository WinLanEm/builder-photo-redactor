<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
require_once __DIR__ . '/repository/otherIterator/classes/RadioStation.php';
require_once __DIR__ . '/repository/otherIterator/classes/StationList.php';

$stationList = new StationList();
$station1 = new RadioStation(15);
$station2 = new RadioStation(18);
$station3 = new RadioStation(11);
$station4 = new RadioStation(5);
$stationList->addStation($station1);
$stationList->addStation($station2);
$stationList->addStation($station3);
$stationList->addStation($station4);

$stationList->next();
echo $stationList->count() . "\n";
$stationList->removeStation($station3);
echo $stationList->count() . "\n";
print_r($stationList->current());