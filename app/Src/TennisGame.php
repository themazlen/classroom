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

    private function isTied()
    {
        return $this->pointsKrypto == $this->pointsGoofy;
    }

    private function hasSum($totalPoints){

    }


    public function getScore()
    {

        if ($this->isTied() && array_sum([$this->pointsKrypto, $this->pointsGoofy]) >= 4) {
            return 'Deuce';
        }

        if ($this->isTied() && array_sum([$this->pointsKrypto, $this->pointsGoofy]) < 4){
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
