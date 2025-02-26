<?php



require_once './repository/factoryMethod/DeliveryServiceHelper.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");

if (!isset($_POST['delivery_service']) || !isset($_POST['weight']) || !isset($_POST['length']) || !isset($_POST['width']) || !isset($_POST['height'])) {
    http_response_code(500);
    return [
        'status' => false,
        'message' => 'Bad request'
    ];
}
$params = [
  'weight' => $_POST['weight'],
  'height' => $_POST['height'],
  'length' => $_POST['length'],
  'width' => $_POST['width'],
  'distance' => $_POST['distance'],
];
$service = $_POST['delivery_service'];
$currentService = DeliveryServiceHelper::getDeliveryService($service);
echo $currentService->calculateCost($params);