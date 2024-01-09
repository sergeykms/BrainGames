<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\startGame;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 10;
const START_ROUND = 1;
const COUNT_ROUNDS = 3;

// Наибольший общий делитель
function findLargestDivisor(int $x, int $y)
{
    $startDivisor = $x <= $y ? $x : $y;
    for ($i = $startDivisor; $i >= 1; $i--) {
        if ($x % $i === 0 && $y % $i === 0) {
            return $i;
        }
    }
}

function brainGcd()
{
    $nameGame = 'Find the greatest common divisor of given numbers.';
    $dataGame = [];

    for ($i = START_ROUND; $i <= COUNT_ROUNDS; $i++) {
        $firstNumberToCheck = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $secondNumberToCheck = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $largestDivisor = findLargestDivisor($firstNumberToCheck, $secondNumberToCheck);
        $nameGame = 'Find the greatest common divisor of given numbers.';
        $dataGame[]  = ["{$firstNumberToCheck} {$secondNumberToCheck}", (string) $largestDivisor];
    }
    startGame($nameGame, $dataGame);
}
