<?php

namespace App\Src;

class RomanNumerals
{

    private const map = [
        1000 => 'm', 900 => 'cm',
        500 => 'd', 400 => 'cd', 100 => 'c', 90 => 'xc',
        50 => 'l', 40 => 'xl', 10 => 'x', 9 => 'ix', 5 => 'v', 4 => 'iv', 1 => 'i',
    ];

    /**
     * @param int $arabic
     * @return string
     */

    public function generateRoman(int $arabic)
    {
        $roman = '';

        foreach (self::map as $key => $value) {
            while ($arabic >= $key) {
                $roman .= $value;
                $arabic -= $key;
            }

        }
        return $roman;
    }

    /**
     * @param string $roman
     * @return int
     */

    public function generateArabic(string $roman): int{
        $arabic = 0;

        foreach (self::map as $key => $value){
            while(str_starts_with($roman, $value)){
                $arabic += $key;
                $roman = substr($roman, strlen($value));
            }
        }
        return $arabic;
    }
}

