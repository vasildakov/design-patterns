<?php

declare(strict_types=1);

namespace VasilDakov\DesignPatterns\Behavioral\Strategy;

use RuntimeException;

/**
 * The Context Consumer
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

        // Change the strategy dynamically at runtime
        $this->service->setGateway($gateway);

        // Execute the new strategy
        return $this->service->process(new Payment($request->amount));
    }
}
