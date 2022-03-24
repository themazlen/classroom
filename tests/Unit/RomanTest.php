<?php

namespace Tests\Unit;

use App\Src\Roman;
use PHPUnit\Framework\TestCase;



class RomanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @dataProvider data
     * @return void
     */

    public function testItShowsTheRomanNumeral($roman, $number){

        $this->assertEquals($roman, (new Roman())->fromArabicToRoman($number));


    }

    /**
     * A basic unit test example.
     *
     * @dataProvider data
     * @return void
     */
    public function testItShowsTheNumeral($roman, $number){

        $this->assertEquals($number, (new Roman())->fromRomanToArabic($roman));

    }




    public function data(){
        return  [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['V', 5],
            ['X', 10],
            ['XXII', 22],
        ];
    }

}
