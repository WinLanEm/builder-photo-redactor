<?php

namespace chainOfResponsibility\exitFirstCorrect\classes;

require_once 'AbstractTaxi.php';

class Taxi2 extends AbstractTaxi
{
    protected function status()
    {
        if (rand(1, 3) === 3) {
            echo "Taxi 2. Принимаю заказ\n";
            return true;
        } else {
            echo "Taxi 2. Занят\n";
            return false;
        }
    }
}