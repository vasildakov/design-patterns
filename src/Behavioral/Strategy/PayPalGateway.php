<?php

declare(strict_types=1);

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

final class PayPalGateway implements PaymentGateway
{
    public function process(Payment $payment): PaymentResult
    {
        // Integration code for processing payment via PayPal gateway
        return new PaymentResult('Process payment using PayPal gateway');

        // Additional logic specific to PayPal gateway
    }
}
