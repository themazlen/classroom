<?php

namespace App\Src;

class TennisGame
{
    public int $pointsKrypto = 0;
    public int $pointsGoofy = 0;


    public function mapPoints($point)
    {
        return match ($point) {
            0 => 'Love',
            1 => '15',
            2 => '30',
            3 => '40',

        };
    }


    public function getScore()
    {

        if ($this->pointsKrypto == $this->pointsGoofy) {
            return $this->mapPoints($this->pointsKrypto) . ' - All';
        }
        return $this->mapPoints($this->pointsKrypto) . ' - ' . $this->mapPoints($this->pointsGoofy);
    }


    public function kryptoScoresPoint()
    {
        $this->pointsKrypto++;
    }

    public function goofyScoresPoint()
    {
        $this->pointsGoofy++;
    }
}
