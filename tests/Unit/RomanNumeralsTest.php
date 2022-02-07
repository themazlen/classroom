<?php

namespace Tests\Unit;

use App\Src\RomanNumerals;
use PHPUnit\Framework\TestCase;


class RomanNumeralsTest extends TestCase
{
    /**
     * A basic unit test example.
     * @dataProvider data
     * @return void
     */
    public function testItShowsRomanNumeral($roman, $number){

        $this->assertEquals($roman, (new RomanNumerals())->generate($number));
    }

    public function data(): array
    {
        return[
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['V', 5],
            ['X', 10],
        ];
    }

}
