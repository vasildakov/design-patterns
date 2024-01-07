<?php

namespace VasilDakov\DesignPatterns\Creational\StaticFactoryMethod;

class Logger
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function withName($name): Logger
    {
        return new Logger($name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
