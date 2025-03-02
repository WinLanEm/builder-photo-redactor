<?php


require_once __DIR__ . '/../interfaces/UserCreateInterface.php';

final class UserCreate implements UserCreateInterface
{
    public function run(User $user, array $userData): User
    {
        echo "Пользователь создан стандартно Имя - {$userData['name']}, Пароль - {$userData['password']}\n";
        return $user;
    }

}