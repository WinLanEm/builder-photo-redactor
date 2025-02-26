<?php

use Proxy\ImageProxy;

require_once 'repository/Proxy/ImageProxy.php';

header('Content-Type: image/jpeg');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");

if (!isset($_FILES['image']) || !isset($_POST['style'])) {
    die('Ошибка: изображение или стиль не были переданы.');
}

$imagePath = $_FILES['image']['tmp_name'];
$style = $_POST['style'];

function setStyle($imagePath,$style)
{
    $imageProxy = new ImageProxy();
    $imageProxy->setImagePath($imagePath);
    $imageProxy->setStyle($style);
    $newImage = $imageProxy->showFilteredImage();
    echo $newImage;
}
setStyle($imagePath,$style);


