<?php

namespace chainOfResponsibility\exitFirstCorrect;

use chainOfResponsibility\exitFirstCorrect\classes\Taxi1;
use chainOfResponsibility\exitFirstCorrect\classes\Taxi2;
use chainOfResponsibility\exitFirstCorrect\classes\Taxi3;

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