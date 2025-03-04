<?php

namespace decorator\decorators;

require_once 'OrderUpdateDecoratorAbstract.php';

class OrderUpdateDecoratorNotifierUsers extends OrderUpdateDecoratorAbstract
{
    protected function actionNotifyUsers()
    {
        echo "Пользователи оповещены\n";
    }
}