<?php



interface DeliveryInterface
{
    public function calculateCost(array $params):float;
}