<?php

// Vamos a seguir el principio de abierto-cerrado creando una interfaz Discount y haciendo que Order trabaje con ella para aplicar descuentos, sin modificar su estructura básica. Así, si necesitamos agregar más tipos de descuentos, solo debemos extender el sistema, no modificarlo.

namespace Discounts;

use Models\Order;

interface Discount
{
  public function apply(Order $order): float;
}
