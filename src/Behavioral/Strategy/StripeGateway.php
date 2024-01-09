<?php

declare(strict_types=1);

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

final class StripeGateway implements PaymentGateway
{
    public function process(Payment $payment): PaymentResult
    {
        // Integration code for processing payment via Stripe gateway
        return new PaymentResult('Process payment using Stripe gateway');
        // Additional logic specific to Stripe gateway
    }
}
