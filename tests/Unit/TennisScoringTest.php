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
    // "advantage, player name" = if they have 4+ points and are ahead by 1

    public function testItStartsAtLoveAll(){
       $game = new TennisGame();

       $this->assertEquals("Love - All", $game->getScore());
    }

    public function test1_0Is15Love(){
        $game = new TennisGame();
        $game->kryptoScoresPoint();

        $this->assertEquals("15 - Love", $game->getScore());
    }

    public function test1_1Is15All(){
        $game = new TennisGame();
        $game->kryptoScoresPoint();
        $game->goofyScoresPoint();

        $this->assertEquals("15 - All", $game->getScore());
    }
    public function test2_0Is30Love(){
        $game = new TennisGame();
        $game->kryptoScoresPoint();
        $game->kryptoScoresPoint();

        $this->assertEquals("30 - Love", $game->getScore());
    }

    public function test0_1IsLove15(){
        $game = new TennisGame();
        $game->goofyScoresPoint();

        $this->assertEquals("Love - 15", $game->getScore());
    }

    public function test0_2IsLove30(){
        $game = new TennisGame();
        $game->goofyScoresPoint();
        $game->goofyScoresPoint();

        $this->assertEquals("Love - 30", $game->getScore());
    }

    public function test2_2IsDeuce(){
        $game = new TennisGame();
        $game->kryptoScoresPoint();
        $game->kryptoScoresPoint();
        $game->goofyScoresPoint();
        $game->goofyScoresPoint();

        $this->assertEquals("Deuce", $game->getScore());
    }

}
