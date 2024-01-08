<?php

declare(strict_types=1);

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

use Psr\Log\InvalidArgumentException;

/**
 * PaymentService (The Context)
 */
final class PaymentService
{
    public function __construct(private ?PaymentGateway $gateway = null)
    {
    }

    public function setGateway(PaymentGateway $gateway): void
    {
        $this->gateway = $gateway;
    }

    public function process(Payment $payment)
    {
        if (null === $this->gateway) {
            throw new InvalidArgumentException("No payment gateway set.");
        }

        return $this->gateway->process($payment);
    }
}
