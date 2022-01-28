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

        if ($this->isTied() && array_sum([$this->pointsKrypto, $this->pointsGoofy]) >= 4) {
            return 'Deuce';
        }

        if ($this->isTied() && array_sum([$this->pointsKrypto, $this->pointsGoofy]) < 4){
            return $this->mapPoints($this->pointsKrypto) . ' - All';
        }

        if ($this->someoneHasThreePoints() && $this->someoneIsLeadingByOne()){
            return 'Advantage, ' . $this->leader();
        }

        if ($this->someoneHasAtLeastFourPoints() && $this->someoneWinsByTwo()){
            return 'Winner, ' . $this->leader();
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
    private function someoneHasThreePoints(): bool
    {
        return $this->pointsKrypto >= 3 || $this->pointsGoofy >= 3;
    }

    /**
     * @return bool
     */
    private function someoneHasAtLeastFourPoints(): bool
    {
        return $this->pointsKrypto >= 4 || $this->pointsGoofy >= 4;
    }

    private function someoneWinsByTwo(): bool
    {
       return abs(($this->pointsKrypto - $this->pointsGoofy) || ($this->pointsKrypto - $this->pointsGoofy) == 2);
    }
}
