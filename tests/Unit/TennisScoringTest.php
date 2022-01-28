<?php

namespace Tests\Unit;

use App\Src\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisScoringTest extends TestCase
{
    // in order to win, a person must have 4+ points and be leading by 2
    // scoring has special terms. when a person has 1 = 15, 2 = 30, 3 = 40, 0 = love,
    // a "deuce" = a tie, and they 3+ points.
    // "points-all" = a tie with less than 3 points
    // "advantage, player name" = if they have 3+ points and are ahead by 1
    /**
     * @dataProvider scores
     * @return void
     */


    public function testItKeepsScore($kryptoPoints, $goofyPoints, $score){
       $game = new TennisGame();
       for($x = 0; $x < $kryptoPoints; $x++) {
           $game->kryptoScoresPoint();
       }
        for($x = 0; $x < $goofyPoints; $x++) {
            $game->goofyScoresPoint();
        }

       $this->assertEquals($score, $game->getScore());
    }

    public function scores(){
        return [
            [0,0, 'Love - All'],
            [1,0, '15 - Love'],
            [1,1, '15 - All'],
            [2,0, '30 - Love'],
            [0,1, 'Love - 15'],
            [0,2, 'Love - 30'],
            [2,2, 'Deuce'],
            [3,2, 'Advantage, Krypto'],
            [4,3, 'Advantage, Krypto'],
            [5,4, 'Advantage, Krypto'],
            [2,3, 'Advantage, Goofy'],
            [4,2, 'Winner, Krypto'],
            [3,5, 'Winner, Goofy'],
            [7,5, 'Winner, Krypto'],
            [9,11, 'Winner, Goofy'],
        ];
    }

}
