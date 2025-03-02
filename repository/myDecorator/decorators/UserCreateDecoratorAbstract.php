<?php

require_once __DIR__ . '/../interfaces/UserCreateInterface.php';

class UserCreateDecoratorAbstract implements UserCreateInterface
{
    protected $userDecorator;

    public function __construct(UserCreateInterface $userDecorator)
    {
        $this->userDecorator = $userDecorator;
    }

    public function run(User $user, array $userData): User
    {
        $this->userCreateWithEmail($userData);
        $this->userCreateWithPhone($userData);
        $this->userCreateDefault($user,$userData);
        return $user;
    }
    protected function userCreateDefault(User $user,array $userData):User
    {
        return $this->userDecorator->run($user,$userData);
    }
    protected function userCreateWithEmail($userData)
    {

    }
    protected function userCreateWithPhone($userData)
    {

    }


}