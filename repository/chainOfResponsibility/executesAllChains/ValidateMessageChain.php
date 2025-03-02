<?php

require_once 'classes/DeleteCapitalLetters.php';
require_once 'classes/DeleteDesign.php';
require_once 'classes/DeleteNumbers.php';

class ValidateMessageChain
{
    public function run($message)
    {
        $obj = new DeleteCapitalLetters();
        $obj->setNext((new DeleteDesign()))->setNext((new DeleteNumbers()));

        $finalMessage = $obj->deleteMessages($message);

        echo "Окончательный результат: " . $finalMessage . "\n";
    }
}