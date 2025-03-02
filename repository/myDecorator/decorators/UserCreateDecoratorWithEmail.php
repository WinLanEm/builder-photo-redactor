<?php

require_once __DIR__ . '/../interfaces/UserCreateInterface.php';
require_once __DIR__ . '/UserCreateDecoratorAbstract.php';

class UserCreateDecoratorWithEmail extends UserCreateDecoratorAbstract
{
    protected function userCreateWithEmail($userData)
    {
        echo "С почтой {$userData['email']}\n";
    }
}