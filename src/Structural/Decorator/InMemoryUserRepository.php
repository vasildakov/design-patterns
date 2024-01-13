<?php

namespace VasilDakov\DesignPatterns\Structural\Decorator;

class InMemoryUserRepository implements UserRepositoryInterface
{

    /**
     * @var array|array[]
     */
    private array $data = [
        [
            'id' => '1',
            'email' => 'vasildakov@gmail.com'
        ],
        [
            'id' => '2',
            'email' => 'john.doe@gmail.com'
        ]
    ];

    public function findById(string $id): ?User
    {
        $key = array_search($id, array_column($this->data, 'id'));
        if (!is_int($key)) {
            return null;
        }
        $row = $this->data[$key];
        return new User($row['id'], $row['email']);

    }
}
