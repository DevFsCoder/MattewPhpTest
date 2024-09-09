<?php

use PHPUnit\Framework\TestCase;
use Src\Basket;

class BasketTest extends TestCase
{
    public function testBasketCanBeInitialized()
    {
        $basket = new Basket();
        $this->assertInstanceOf(Basket::class, $basket);
    }

    public function testAddProductToBasket()
    {
        $basket = new Basket();
        $basket->add('R01'); // Adding Red Widget

        $this->assertEquals(1, $basket->getItemCount());
    }
}
