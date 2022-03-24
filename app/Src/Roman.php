<?php

namespace App\Src;

class Roman
{

//    Generate with 0ne
    public function fromArabicToRoman($arabic)
    {
        $map = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        );

        $roman = '';

        foreach ($map as $key => $value) {
            while ($arabic >= $value) {
                $roman .= $key;
                $arabic -= $value;
            }
        }

        return $roman;
    }


    public function fromRomanToArabic($roman){
        $letters = [
            'CM', 'CD', 'XC', 'XL', 'IX', 'IV', 'M', 'D', 'C', 'L', 'X', 'V', 'I'
        ];

        $digits = [
            '900-', '400-', '90-', '40-', '9-', '4-', '1000-', '500-', '100-', '50-', '10-', '5-', '1-'
        ];

        return array_sum(explode('-', str_replace($letters, $digits, $roman)));

    }

}
