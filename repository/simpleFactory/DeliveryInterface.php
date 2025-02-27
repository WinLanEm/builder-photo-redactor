<?php



interface DeliveryInterface
{
    public function calculateCost(array $params):float;
    public function getParams():array;
    public function getServiceName():string;
}