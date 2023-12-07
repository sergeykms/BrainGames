<?php

namespace BrainGames\Games\BrainPrime;

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
    $countRounds = 3;

    for ($i = 1; $i <= $countRounds; $i++) {
        $dataGame[] = primeNumber();
    };
    startGame($nameGame, $dataGame);
}
