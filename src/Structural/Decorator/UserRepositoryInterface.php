<?php

namespace VasilDakov\DesignPatterns\Structural\Decorator;

interface UserRepositoryInterface
{
    public function findById(string $id): ?User;
}
