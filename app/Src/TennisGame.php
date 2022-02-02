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

    public function leader(){
        return $this->pointsKrypto > $this->pointsGoofy ? 'Krypto' : 'Goofy';
    }


    public function getScore()
    {

        if ($this->someoneHasAtLeastPoints(3) && $this->someoneIsLeadingByOne()){
            return 'Advantage, ' . $this->leader();
        }

        if ($this->someoneHasAtLeastPoints(4) && $this->someoneWinsByTwo()){
            return 'Winner, ' . $this->leader();
        }

        if($this->isTied()) {
            return $this->combinedPoints() >= 6 ? 'Deuce' : $this->mapPoints($this->pointsKrypto) . ' - All';
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

    /**
     * @return bool
     */
    private function someoneIsLeadingByOne(): bool
    {
        return abs($this->pointsKrypto - $this->pointsGoofy) == 1;
    }


    /**
     * @return bool
     */
    private function someoneHasAtLeastPoints(int $points): bool
    {
        return $this->pointsKrypto >= $points || $this->pointsGoofy >= $points;
    }

    private function someoneWinsByTwo(): bool
    {
       return abs($this->pointsKrypto - $this->pointsGoofy) == 2;
    }

    /**
     * @return float|int
     */
    private function combinedPoints(): int|float
    {
        return array_sum([$this->pointsKrypto, $this->pointsGoofy]);
    }
}
