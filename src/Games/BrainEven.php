<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\startGame;

function brainEven()
{
    $nameGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataGame = [];
    $countRounds = 3;

    for ($i = 1; $i <= $countRounds; $i++) {
        $question = strval(rand(1, 100));
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $dataGame[] = [$question, $correctAnswer];
    };
    startGame($nameGame, $dataGame);
}
