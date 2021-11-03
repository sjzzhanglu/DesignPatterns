<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * DateTime: 2021/11/3 3:16 下午
 */

namespace DesignPatterns\Creational\AbstractFactory;

class DigitalProduct implements Product
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->price;
    }
}
