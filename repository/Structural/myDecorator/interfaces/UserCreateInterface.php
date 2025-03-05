<?php


namespace myDecorator\interfaces;



use myDecorator\models\User;

interface UserCreateInterface
{
    public function run(User $user, array $userData): User;
}