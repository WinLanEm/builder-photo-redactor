<?php

namespace decorator\decorators;

use decorator\interfaces\OrderUpdateInterface;
use decorator\models\Order;

require_once __DIR__ . '/../interfaces/OrderUpdateInterface.php';
require_once __DIR__ . '/../models/Order.php';

class OrderUpdateDecoratorAbstract implements OrderUpdateInterface
{
    protected $decoratorObject;

    public function __construct(OrderUpdateInterface $decoratorObject)
    {
        $this->decoratorObject = $decoratorObject;
    }

    public function run(Order $order, array $orderData): Order
    {
        $this->actionBefore();
        $this->actionNotifyManagers();
        $this->actionMain($order, $orderData);
        $this->actionNotifyUsers();
        $this->actionAfter();
        return $order;
    }

    protected function actionBefore()
    {

    }

    protected function actionMain($order, $orderData): Order
    {
        return $this->decoratorObject->run($order, $orderData);
    }

    protected function actionAfter()
    {

    }

    protected function actionNotifyManagers()
    {

    }

    protected function actionNotifyUsers()
    {

    }


}