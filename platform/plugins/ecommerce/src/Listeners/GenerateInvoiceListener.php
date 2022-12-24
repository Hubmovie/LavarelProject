<?php

namespace Botble\Ecommerce\Listeners;

use Botble\Ecommerce\Events\OrderPlacedEvent;
use InvoiceHelper;

class GenerateInvoiceListener
{
    public function handle(OrderPlacedEvent $event): void
    {
        $order = $event->order;

        InvoiceHelper::store($order);
    }
}
