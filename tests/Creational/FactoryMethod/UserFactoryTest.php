<?php

namespace VasilDakov\DesignPatternsTests\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use VasilDakov\DesignPatterns\Creational\FactoryMethod\User;
use VasilDakov\DesignPatterns\Creational\FactoryMethod\UserFactory;

class UserFactoryTest extends TestCase
{
    public function testItCanCreateUser(): void
    {
        // Arrange
        $factory = new UserFactory();

        // Act
        $user = $factory->create('vasildakov@gmail.com', '12345678');

        // Assert
        self::assertInstanceOf(User::class, $user);

    }
}
