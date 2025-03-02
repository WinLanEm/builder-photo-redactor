<?php
require_once 'AbstractTaxi.php';
class Taxi1 extends AbstractTaxi
{
    protected function status()
    {
        if(rand(1,3) === 3){
            echo "Taxi 1. Принимаю заказ\n";
            return true;
        }else{
            echo "Taxi 1. Занят\n";
            return false;
        }
    }
}