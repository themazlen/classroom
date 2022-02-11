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
     * @test
     */
    public function ItShowsRomanNumeral($arabic, $result)
    {
        $this->assertEquals($result, (new RomanNumerals())->generateRoman($arabic));
    }

    /**
     * A basic unit test example.
     * @dataProvider data
     * @return void
     * @test
     */
    public function ItShowsArabic($roman, $arabic)
    {

        $this->assertEquals($roman, (new RomanNumerals())->generateArabic($arabic));
    }



    public function data(): array
    {
        return [
            [1,'i'],
            [2,'ii'],
            [3,'iii'],
            [4,'iv'],
            [5,'v'],
            [6,'vi'],
            [7,'vii'],
            [8,'viii'],
            [9,'ix'],
            [10,'x'],
            [11,'xi'],
            [15,'xv'],
            [19,'xix'],
            [20,'xx'],
            [30,'xxx'],
            [34,'xxxiv'],
            [35,'xxxv'],
            [39, 'xxxix'],
            [40, 'xl'],
            [49, 'xlix'],
            [50,'l'],
            [80, 'lxxx'],
            [90,'xc'],
            [100,'c'],
            [200,'cc'],
            [288,'cclxxxviii'],
            [400,'cd'],
            [500,'d'],
            [900,'cm'],
            [999,'cmxcix'],
            [1000, 'm'],
        ];
    }

}
