<?php

require_once __DIR__ . '/../models/Order.php';

interface OrderUpdateInterface
{
    public function run(Order $order, array $orderData):Order;
}