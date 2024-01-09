<?php

namespace VasilDakov\DesignPatternsTests\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\AbstractRepositoryFactory;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\ProductRepository;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\RepositoryInterface;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\UserRepository;

class AbstractRepositoryFactoryTest extends TestCase
{
    public function testItCanCreateWithName(): void
    {
        // Arrange
        $factory = new AbstractRepositoryFactory();

        // Act
        $users = $factory->create(UserRepository::class);
        $products = $factory->create(ProductRepository::class);

        // Assert
        self::assertInstanceOf(UserRepository::class, $users);
        self::assertInstanceOf(ProductRepository::class, $products);

        self::assertInstanceOf(RepositoryInterface::class, $users);
        self::assertInstanceOf(RepositoryInterface::class, $products);
    }

    public function testItWillThrowAnExceptionForNonExistingClass(): void
    {
        self::expectException(RuntimeException::class);

        $factory = new AbstractRepositoryFactory();
        $factory->create('NonExistingRepository');

    }
}
