<?php

// Movemos la lógica de facturación a una clase independiente.

namespace Services;

use Models\Order;

class InvoiceService
{
    public function sendInvoice(Order $order)
    {
        // Lógica de envío de factura
        echo "Invoice sent for order with total: {$order->getTotal()}\n";
    }
}
