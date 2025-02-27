<?php

interface DeliveryServiceFactoryInterface
{
    public static function getDeliveryService(string $service,array $params):DeliveryInterface;
}