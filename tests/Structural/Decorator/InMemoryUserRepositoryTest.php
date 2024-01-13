<?php

namespace VasilDakov\DesignPatternsTests\Structural\Decorator;

use PHPUnit\Framework\TestCase;
use VasilDakov\DesignPatterns\Structural\Decorator\InMemoryUserRepository;
use VasilDakov\DesignPatterns\Structural\Decorator\User;
use VasilDakov\DesignPatterns\Structural\Decorator\UserRepositoryInterface;

class InMemoryUserRepositoryTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $repository = new InMemoryUserRepository();

        self::assertInstanceOf(UserRepositoryInterface::class, $repository);
    }

    public function testItCanFindUserById(): void
    {
        $repository = new InMemoryUserRepository();

        $user = $repository->findById('2');

        self::assertInstanceOf(User::class, $user);
    }

    public function testItCanFindUserByIdReturnsNull(): void
    {
        $repository = new InMemoryUserRepository();

        $user = $repository->findById('5');

        self::assertNull($user);
    }
}
