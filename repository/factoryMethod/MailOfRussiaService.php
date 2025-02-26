<?php

require_once 'DeliveryInterface.php';

class MailOfRussiaService implements DeliveryInterface
{
    public function calculateCost(array $params): float
    {
        $bigVolumeRatio = 0.2;
        $weightPrice = $params['weight'] * 0.3;
        $volume = $params['height'] * $params['width'] * $params['length'];
        $totalSizePrice = $volume>12000?$weightPrice * $bigVolumeRatio:$weightPrice;
        $totalPrice = $totalSizePrice * ($params['distance'] * 0.3);
        return $totalPrice;
    }
}