<?php

require_once 'DeliveryInterface.php';

class YandexService implements DeliveryInterface
{
    public function calculateCost(array $params): float
    {
        $bigVolumeRatio = 0.4;
        $weightPrice = $params['weight'] * 0.2;
        $volume = $params['height'] * $params['width'] * $params['length'];
        $totalSizePrice = $volume>10000?$weightPrice * $bigVolumeRatio:$weightPrice;
        $totalPrice = $totalSizePrice * ($params['distance'] * 0.2);
        return $totalPrice;
    }
}