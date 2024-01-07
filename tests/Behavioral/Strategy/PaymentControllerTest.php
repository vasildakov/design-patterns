<?php

namespace VasilDakov\DesignPatternsTests\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentController;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentRequest;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentService;

class PaymentControllerTest extends TestCase
{
    public function testItCanBeCreated()
    {
        $controller = new PaymentController(new PaymentService());

        self::assertInstanceOf(PaymentController::class, $controller);
    }

    public function testItCanSwitchToStripePaymentGateway()
    {
        $controller = new PaymentController(new PaymentService());

        $str = $controller->paymentAction(new PaymentRequest('Stripe', 20.00));

        self::assertStringContainsString('Process payment using Stripe gateway', $str);
    }

    public function testItCanSwitchToPayPalPaymentGateway()
    {
        $controller = new PaymentController(new PaymentService());

        $str = $controller->paymentAction(new PaymentRequest('PayPal', 20.00));

        self::assertStringContainsString('Process payment using PayPal gateway', $str);
    }
}