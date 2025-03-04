<?php

namespace decorator\classes;

use decorator\interfaces\OrderUpdateInterface;
use decorator\models\Order;

require_once __DIR__ . '/../interfaces/OrderUpdateInterface.php';
require_once __DIR__ . '/../models/Order.php';

final class OrderUpdate implements OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order
    {
        echo "Base update\n";
        return $order;
    }

}