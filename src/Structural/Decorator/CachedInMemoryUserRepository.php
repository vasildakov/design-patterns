<?php

namespace VasilDakov\DesignPatterns\Structural\Decorator;

use Psr\Cache\CacheItemPoolInterface;

readonly class CachedInMemoryUserRepository implements UserRepositoryInterface
{
    public function __construct(
        public InMemoryUserRepository $repository,
        public CacheItemPoolInterface $pool
    ) {
    }


    public function findById(string $id): ?User
    {
        $item = $this->pool->getItem($key);
        if ($item->isHit()) {
            /** @var User  */
            return $item->get();
        }

        $user = $this->repository->findById($id);
        $item->set($user);

        $this->pool->save($item);

        return $user;
    }
}
