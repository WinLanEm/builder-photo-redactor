<?php

require_once 'AbstractTaxi.php';
class Taxi3 extends AbstractTaxi
{
    protected function status()
    {
        if(rand(1,3) === 3){
            echo "Taxi 3. Принимаю заказ\n";
            return true;
        }else{
            echo "Taxi 3. Занят\n";
            return false;
        }
    }
}