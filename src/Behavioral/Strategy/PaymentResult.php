<?php

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

readonly class PaymentResult
{
    public function __construct(public string $message)
    {
    }
}
