<?php

namespace BrainGames\Games\BrainEven;

require_once 'src/config.php';

use function BrainGames\Engine\startGame;

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
