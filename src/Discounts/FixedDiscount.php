<?php

namespace Discounts;

use Models\Order;

class FixedDiscount implements Discount
{

  public function __construct(private float $discountAmount) {}

  public function apply(Order $order): float
  {
    return $order->getTotal() - $this->discountAmount;
  }
}
