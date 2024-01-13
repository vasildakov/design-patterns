<?php

namespace VasilDakov\DesignPatterns\Structural\Decorator;

readonly class User
{
    public function __construct(public string $id, public string $email)
    {
    }
}
