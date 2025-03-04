<?php

namespace decorator\decorators;

require_once 'OrderUpdateDecoratorAbstract.php';

class OrderUpdateDecoratorLogger extends OrderUpdateDecoratorAbstract
{
    protected function actionBefore()
    {
        echo "Log before\n";
    }

    protected function actionAfter()
    {
        echo "Log after\n";
    }
}