<?php

namespace VasilDakov\DesignPatternsTests\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use VasilDakov\DesignPatterns\Behavioral\Strategy\Payment;
use VasilDakov\DesignPatterns\Behavioral\Strategy\PaymentService;

class PaymentServiceTest extends TestCase
{
    public function testItWillThrowAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No payment gateway set.');

        $service = new PaymentService();
        $service->process(new Payment(100));
    }
}
