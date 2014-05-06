<?php
require_once __DIR__.'/../Money.php';
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
        
        $this->assertEquals("GBP", $b->getCurrency());
    }

    // ...
}