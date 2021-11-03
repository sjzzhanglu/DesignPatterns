<?php
/**
 * Created by PhpStorm.
 * User: Zero
 * DateTime: 2021/11/3 3:09 下午
 */

namespace DesignPatterns\Creational\AbstractFactory;

interface Product
{
    public function calculatePrice(): int;
}
