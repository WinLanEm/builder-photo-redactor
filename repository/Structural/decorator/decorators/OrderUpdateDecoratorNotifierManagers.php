<?php

namespace decorator\decorators;

require_once 'OrderUpdateDecoratorAbstract.php';

class OrderUpdateDecoratorNotifierManagers extends OrderUpdateDecoratorAbstract
{
    protected function actionNotifyManagers()
    {
        echo "Менеджеры оповещены\n";
    }
}