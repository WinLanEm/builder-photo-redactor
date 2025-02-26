<?php

require_once 'DeliveryInterface.php';

class CdekService implements DeliveryInterface
{
    public function calculateCost(array $params): float
    {
        $bigVolumeRatio = 0.6;
        $weightPrice = $params['weight'] * 0.1;
        $volume = $params['height'] * $params['width'] * $params['length'];
        $totalSizePrice = $volume>15000?$weightPrice * $bigVolumeRatio:$weightPrice;
        $totalPrice = $totalSizePrice * ($params['distance'] * 0.4);
        return $totalPrice;
    }
}