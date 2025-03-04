<?php


namespace myDecorator\interfaces;

use state\classes\User;

interface UserCreateInterface
{
    public function run(User $user, array $userData): User;
}