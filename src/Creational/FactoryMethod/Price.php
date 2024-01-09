<?php

namespace VasilDakov\DesignPatterns\Creational\FactoryMethod;

class Price
{
    private string|int $value;

    public function __construct(string|int $value)
    {
        $this->value = $value;
    }

    // named constructor
    public static function fromInt(int $value): Price
    {
        return new self($value);
    }

    // named constructor
    public static function fromString(string $value): Price
    {
        return new self($value);
    }

}
