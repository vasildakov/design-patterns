<?php

namespace VasilDakov\DesignPatterns\Structural\Adapter;

class AuthenticationService implements AuthenticationServiceInterface
{
    public function __construct(private readonly AdapterInterface $adapter)
    {
    }

    public function authenticate()
    {
        return $this->adapter->authenticate();
    }
}
