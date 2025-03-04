<?php

namespace decorator\interfaces;

use decorator\models\Order;

require_once __DIR__ . '/../models/Order.php';

interface OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order;
}