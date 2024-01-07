<?php

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

use RuntimeException;

final class PaymentGatewayFactory
{
    /**
     * @param string $name
     * @return PaymentGateway
     */
    public static function create(string $name): PaymentGateway
    {
        return match($name) {
            'PayPal' => new PayPalGateway(),
            'Stripe' => new StripeGateway(),
            default  => throw new RuntimeException('Unsupported Payment Gateway'),
        };
    }
}
