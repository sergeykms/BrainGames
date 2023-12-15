<?php

namespace BrainGames\Games\BrainPrime;

use BrainGames\Engine\COUNT_ROUNDS;

use function BrainGames\Engine\startGame;

// Простое число
function primeNumber()
{
    $checkNumber = rand(1, 500);
    for ($i = 2; $i < $checkNumber; $i++) {
        if ($checkNumber % $i === 0) {
            return [$checkNumber, 'no'];
        };
    };
    return [strval($checkNumber), 'yes'];
}

function brainPrime()
{
    $nameGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataGame = [];

    for ($i = 1; $i <= COUNT_ROUNDS; $i++) {
        $dataGame[] = primeNumber();
    };
    startGame($nameGame, $dataGame);
}
