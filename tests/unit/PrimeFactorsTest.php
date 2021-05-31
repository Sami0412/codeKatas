<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function testGeneratePrimeFactorsFor1()
    {
        $factors = new PrimeFactors;

        $this->assertEquals([], $factors->generate(1));     //Expected to return empty array - no prime factors for 1
        
    }

    public function testGeneratePrimeFactorsFor2()
    {
        $factors = new PrimeFactors;

        $this->assertEquals([2], $factors->generate(2));     
        
    }

    public function testGeneratePrimeFactorsFor3()
    {
        $factors = new PrimeFactors;

        $this->assertEquals([3], $factors->generate(3));     
        
    }

    public function testGeneratePrimeFactorsFor4()
    {
        $factors = new PrimeFactors;

        $this->assertEquals([2, 2], $factors->generate(4));     
        
    }
}