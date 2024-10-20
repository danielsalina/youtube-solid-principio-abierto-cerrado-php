<?php

// Separamos la lógica de envío en su propia clase, lo que hace que la clase Order no se encargue de esta responsabilidad.

namespace Services;

use Models\Order;

class ShipmentService
{
    public function processShipment(Order $order)
    {
        // Lógica de procesamiento de envío
        echo "Shipment processed for order with total: {$order->getTotal()}\n";
    }
}
