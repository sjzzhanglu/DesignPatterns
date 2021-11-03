<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Zero
 * DateTime: 2021/11/3 3:26 下午
 */
namespace DesignPatterns\Creational\AbstractFactory\Tests;
use DesignPatterns\Creational\AbstractFactory\DigitalProduct;
use DesignPatterns\Creational\AbstractFactory\ProductFactory;
use DesignPatterns\Creational\AbstractFactory\ShippableProduct;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->crateDigitalProduct(150);
        $this->assertInstanceOf(DigitalProduct::class, $product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->crateDigitalProduct(150);
        $this->assertEquals(150, $product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertEquals(200, $product->calculatePrice());
    }
}
