<?php

namespace eventChannel\classes;

use eventChannel\interfaces\SubscriberInterface;

require_once __DIR__ . "/../interfaces/SubscriberInterface.php";

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $msg = "{$this->getName()} оповещен данными $data\n";
        echo $msg;
        //очевидно в проекте логика будет другая,но для примера echo сойдет
    }

    public function getName()
    {
        return $this->name;
    }

}