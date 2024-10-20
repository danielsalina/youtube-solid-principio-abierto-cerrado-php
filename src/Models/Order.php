<?php

// No vamos a modificar la clase Order directamente, sino que agregaremos la posibilidad de trabajar con descuentos usando el patrón "abierto para extensión, cerrado para modificación".

namespace Models;

use Discounts\Discount;

class Order
{
    private $products = [];
    private $total = 0;
    private $discount;

    public function addProduct(Product $product, int $quantity)
    {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
        $this->total += $product->getPrice() * $quantity; // Esto se lo volamos...
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setDiscount(Discount $discount): void
    {
        $this->discount = $discount;
    }

    public function calculateTotalWithDiscount(): float
    {
        if ($this->discount) {
            return $this->discount->apply($this);
        }

        return $this->getTotal();
    }
}
