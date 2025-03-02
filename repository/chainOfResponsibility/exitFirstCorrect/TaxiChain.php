<?php

require_once 'classes/Taxi1.php';
require_once 'classes/Taxi2.php';
require_once 'classes/Taxi3.php';


class TaxiChain
{
    public function run()
    {
        $obj = new Taxi1();
        $obj->setNext((new Taxi2()))->setNext((new Taxi3()));
        $obj->message();
    }
}