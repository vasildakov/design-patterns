<?php

namespace VasilDakov\DesignPatterns\Creational\AbstractFactory\Controller;

use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\UserRepository;

readonly class UserController
{
    public function __construct(public UserRepository $repository)
    {
    }
}
