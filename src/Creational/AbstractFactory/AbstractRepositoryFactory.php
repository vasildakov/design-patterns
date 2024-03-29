<?php

namespace VasilDakov\DesignPatterns\Creational\AbstractFactory;

use RuntimeException;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\EntityManager;
use VasilDakov\DesignPatterns\Creational\AbstractFactory\Repository\RepositoryInterface;

final class AbstractRepositoryFactory
{
    public function create(string $className): RepositoryInterface
    {
        if (!$this->canCreate($className)) {
            throw new RuntimeException;
        }

        return new $className(new EntityManager());
    }


    private function canCreate(string $className): bool
    {
        if (!class_exists($className)) {
            return false;
        }

        return in_array(RepositoryInterface::class, class_implements($className), true);
    }
}
