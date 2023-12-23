<?php

use Bmoinet\Example\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * Unit test of class Calculator
 */
class CalculatorTest extends TestCase
{
    protected Calculator $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->calculator->mean($numbers));
    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->calculator->median($numbers));

        $numbers = [3, 7, 6, 1, 5, 9];
        $this->assertEquals(5.5, $this->calculator->median($numbers));
    }
}