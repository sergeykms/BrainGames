<?php

namespace BrainGames\Games\BrainPrime;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 500;
const START_ROUND = 1;
const COUNT_ROUNDS = 3;

use function BrainGames\Engine\startGame;

// Простое число
function primeNumber(int $NumberToCheck)
{
    for ($i = 2; $i < $NumberToCheck; $i++) {
        if ($NumberToCheck % $i === 0) {
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
        $NumberToCheck = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $correctAnswer = primeNumber($NumberToCheck) ? 'yes' : 'no';

        $dataGame[] = [$NumberToCheck, $correctAnswer];
    }
    startGame($nameGame, $dataGame);
}
