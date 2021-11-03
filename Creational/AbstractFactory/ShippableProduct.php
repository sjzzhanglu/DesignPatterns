<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * DateTime: 2021/11/3 3:12 下午
 */

namespace DesignPatterns\Creational\AbstractFactory;

class ShippableProduct implements Product
{
    private $productPrice;
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->productPrice + $this->shippingCosts;
    }
}
