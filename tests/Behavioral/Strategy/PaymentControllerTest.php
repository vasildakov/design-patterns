<?php

namespace VasilDakov\DesignPatternsTests\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentController;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentRequest;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentService;

class PaymentControllerTest extends TestCase
{
    public function testItCanBeCreated(): void
    {
        $controller = new PaymentController(new PaymentService());

        self::assertInstanceOf(PaymentController::class, $controller);
    }

    public function testItCanSwitchToStripePaymentGateway(): void
    {
        $controller = new PaymentController(new PaymentService());

        $result = $controller->paymentAction(new PaymentRequest('Stripe', 20.00));

        self::assertStringContainsString('Process payment using Stripe gateway', $result->message);
    }

    public function testItCanSwitchToPayPalPaymentGateway(): void
    {
        $controller = new PaymentController(new PaymentService());

        $result = $controller->paymentAction(new PaymentRequest('PayPal', 20.00));

        self::assertStringContainsString('Process payment using PayPal gateway', $result->message);
    }
}