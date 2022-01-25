<?php

namespace Tests\Unit;

use App\Src\PrimeFactor;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @dataProvider Factors
     * @return void
     */
    public function testItGeneratesPrimeNumbersForEachFactor($number, $result)
    {
        $factor = new PrimeFactor();
        $this->assertEquals($result, $factor->generate($number));
    }

    public function Factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2,2]],
            [5, [5]],
            [6, [2,3]],
            [256, [2,2,2,2,2,2,2,2]],
            [304,[2,2,2,2,19]],
        ];
    }

}
