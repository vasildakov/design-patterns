<?php

namespace VasilDakov\DesignPatternsTests\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use VasilDakov\DesignPatterns\Creational\FactoryMethod\Price;

class PriceTest extends TestCase
{
    public function testItCanCreateFromString(): void
    {
        self::assertInstanceOf(Price::class, Price::fromString('120'));
    }

    public function testItCanCreateFromInt(): void
    {
        self::assertInstanceOf(Price::class, Price::fromInt(120));
    }
}