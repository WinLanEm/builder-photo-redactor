<?php

require_once __DIR__ . '/../interfaces/UserCreateInterface.php';
require_once __DIR__ . '/UserCreateDecoratorAbstract.php';

class UserCreateDecoratorWithPhone extends UserCreateDecoratorAbstract
{
    protected function userCreateWithPhone($userData)
    {
        echo "С номером {$userData['phone']}\n";
    }
}