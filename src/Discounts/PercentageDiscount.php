<?php

namespace Discounts;

use Models\Order;

class PercentageDiscount implements Discount
{

  public function __construct(private float $percentage) {}

  public function apply(Order $order): float
  {
    $total = $order->getTotal();
    return $total - ($total * ($this->percentage / 100));
  }
}
