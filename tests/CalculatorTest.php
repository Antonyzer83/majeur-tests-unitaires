<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\CalculatorService;

class CalculatorTest extends KernelTestCase
{
    public function testAddition(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->addition(1, 1);
        $this->assertEquals(2, $result);
    }

    public function testSoustraction(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->substraction(1, 1);
        $this->assertEquals(0, $result);
    }

    public function testDivision(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->division(8, 2);
        $this->assertEquals(4, $result);
    }

    public function testMultiplication(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->multiplication(3, 4);
        $this->assertEquals(12, $result);
    }

    public function testModulo(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->modulo(4, 3);
        $this->assertEquals(1, $result);
    }

    public function testRacineCarre(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->square(9);
        $this->assertEquals(3, $result);
    }
}
