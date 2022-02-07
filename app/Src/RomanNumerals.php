<?php

namespace App\Src;

class RomanNumerals
{
    public $romans = [];

    public function __construct()
    {
        $romans[1] = 'I';
        $romans[5] = 'V';
        $romans[10] = 'X';

        $this->romans = $romans;
    }

    public function generate(int $number)
    {
        //return str_repeat('I', $number);
        //1 = I
        // return a number of 'I's = to the number

        $roman = '';

        if ($number > 4){
            return $this->romans[$number];
        }

        for ($x = 0; $x < $number; $x++){
            $roman .= 'I';
        }
        return $roman;

//        if ($number == 1) {
//            return 'I';
//        }
//
//        if ($number == 2) {
//            return 'II';
//        }
//
//        return 'III';

    }
}

