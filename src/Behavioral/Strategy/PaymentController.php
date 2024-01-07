<?php

declare(strict_types=1);

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

use RuntimeException;

/**
 * The Context (PaymentService) consumer
 */
final class PaymentController
{
    public function __construct(private readonly PaymentService $service)
    {
    }

    /**
     * @throws RuntimeException
     */
    public function paymentAction(PaymentRequest $request): string
    {
        $gateway = PaymentGatewayFactory::create($request->gateway);

        $this->service->setGateway($gateway);

        return $this->service->process(new Payment($request->amount));
    }
}
