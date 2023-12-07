<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\startGame;

// Наибольший общий делитель
function largestDivisor()
{
    $x = rand(1, 10);
    $y = rand(1, 10);
    $temp = $x <= $y ? $x : $y;
    for ($i = $temp; $i >= 1; $i--) {
        if ($x % $i === 0 && $y % $i === 0) {
            return ["{$x} {$y}", strval($i)];
        };
    };
}

function brainGcd()
{
    $nameGame = 'Find the greatest common divisor of given numbers.';
    $dataGame = [];
    $countRounds = 3;

    for ($i = 1; $i <= $countRounds; $i++) {
        $dataGame[] = largestDivisor();
    };
    startGame($nameGame, $dataGame);
}
