<?php

namespace myDecorator;

use myDecorator\classes\UserCreate;
use myDecorator\decorators\UserCreateDecoratorWithEmail;
use myDecorator\decorators\UserCreateDecoratorWithPhone;
use state\classes\User;

require_once __DIR__ . '/classes/UserCreate.php';
require_once __DIR__ . '/decorators/UserCreateDecoratorWithEmail.php';
require_once __DIR__ . '/decorators/UserCreateDecoratorWithPhone.php';

//Плохо понял с первого раза Решил создать еще


class DecoratorApp
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run()
    {
        $settings = $this->getSettings($this->user->getUserData());
        $createUserObj = $this->createUser($settings);
        $createUserObj->run($this->user, $this->user->getUserData());
    }

    private function getSettings(array $userData): array
    {
        $settings = [
            [
                'field' => isset($userData['email']) ? $userData['email'] : "",
                'decorator_class' => UserCreateDecoratorWithEmail::class
            ],
            [
                'field' => isset($userData['phone']) ? $userData['phone'] : "",
                'decorator_class' => UserCreateDecoratorWithPhone::class
            ]
        ];
        $filteredSettings = array_filter($settings, function ($setting) {
            return $setting['field'] != "";
        });
        return $filteredSettings;
    }

    private function createUser($settings)
    {
        $defaultCreate = new UserCreate();

        foreach ($settings as $setting) {
            $className = $setting['decorator_class'];
            $defaultCreate = new $className($defaultCreate);
        }
        return $defaultCreate;
    }

}