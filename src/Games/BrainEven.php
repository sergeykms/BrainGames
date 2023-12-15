<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\startGame;
use BrainGames\Engine\COUNT_ROUNDS;

function brainEven()
{
    $nameGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataGame = [];

    for ($i = 1; $i <= COUNT_ROUNDS; $i++) {
        $question = strval(rand(1, 100));
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $dataGame[] = [$question, $correctAnswer];
    };
    startGame($nameGame, $dataGame);
}
