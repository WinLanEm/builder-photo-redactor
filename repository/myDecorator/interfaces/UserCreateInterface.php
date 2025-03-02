<?php


interface UserCreateInterface
{
    public function run(User $user, array $userData):User;
}