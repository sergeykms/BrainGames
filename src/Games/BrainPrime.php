<?php

namespace BrainGames\Games\BrainPrime;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 500;
const START_ROUND = 1;

use function BrainGames\Engine\startGame;
use const BrainGames\Engine\COUNT_ROUNDS;

// Простое число
function isPrimeNumber(int $numberToCheck)
{
    for ($i = 2; $i < $numberToCheck; $i++) {
        if ($numberToCheck % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $nameGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataGame = [];

    for ($i = START_ROUND; $i <= COUNT_ROUNDS; $i++) {
        $numberToCheck = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $correctAnswer = isPrimeNumber($numberToCheck) ? 'yes' : 'no';

        $dataGame[] = [$numberToCheck, $correctAnswer];
    }
    startGame($nameGame, $dataGame);
}
