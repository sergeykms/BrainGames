<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\startGame;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 100;
const START_ROUND = 1;
const COUNT_ROUNDS = 3;

function even(int $NumberToCheck)
{
    return $NumberToCheck % 2 === 0 ? true : false;
}

function brainEven()
{
    $nameGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataGame = [];

    for ($i = START_ROUND; $i <= COUNT_ROUNDS; $i++) {
        $NumberToCheck = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $correctAnswer = even($NumberToCheck) ? 'yes' : 'no';
        $dataGame[] = [$NumberToCheck, $correctAnswer];
    }

    startGame($nameGame, $dataGame);
}
