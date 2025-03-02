<?php

require_once 'OrderUpdateDecoratorAbstract.php';
class OrderUpdateDecoratorNotifierUsers extends OrderUpdateDecoratorAbstract
{
    protected function actionNotifyUsers()
    {
        echo "Пользователи оповещены\n";
    }
}