<?php

namespace App\Src;

class PrimeFactor
{

    public function generate(int $number): array
    {
        $factors = [];
        $divisor = 2;

        while($number > 1) {
            while($number % $divisor === 0){
                $factors[] = $divisor;
                $number = $number / $divisor;
            }
            $divisor++;
        }

        return $factors;

    }

}
