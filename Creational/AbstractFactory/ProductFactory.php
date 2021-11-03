<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * DateTime: 2021/11/3 3:19 下午
 */

namespace DesignPatterns\Creational\AbstractFactory;

class ProductFactory
{
    const SHIPPING_COSTS = 50;

    public function createShippableProduct(int $price) : Product
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    public function crateDigitalProduct(int $price) : Product
    {
        return new DigitalProduct($price);
    }
}
